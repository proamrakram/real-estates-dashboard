<?php

namespace App\Http\Livewire;

use App\Models\Order as ModelsOrder;
use App\Models\OrderEditor;
use Livewire\Component;
use Livewire\WithPagination;

class Order extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $rows_number = 10;

    public $search = '';
    public $sort_field = 'id';
    public $sort_direction = 'asc';
    public $style_sort_direction = 'sorting_asc';

    public $order_status_id = null;
    public $property_type_id = null;
    public $city_id = null;
    public $branch_type_id = null;
    public $filters = [];

    public function getMainOrders()
    {
        $this->order_status_id == 'all' ? $this->order_status_id = null : null;
        $this->property_type_id == 'all' ? $this->property_type_id = null : null;
        $this->city_id == 'all' ? $this->city_id = null : null;
        $this->branch_type_id == 'all' ? $this->branch_type_id = null : null;

        $this->filters['order_status_id'] = $this->order_status_id;
        $this->filters['property_type_id'] = $this->property_type_id;
        $this->filters['city_id'] = $this->city_id;
        $this->filters['branch_type_id'] = $this->branch_type_id;
        $this->filters['search'] = $this->search;
        $data = ModelsOrder::data()->filters($this->filters)->orderBy($this->sort_field, $this->sort_direction)->paginate($this->rows_number);
        return $data;
    }

    public function sortBy($field)
    {
        if ($this->sort_field == $field) {
            if ($this->sort_direction === 'asc') {
                $this->sort_direction = 'desc';
                $this->style_sort_direction = 'sorting_desc';
            } else {
                $this->sort_direction = 'asc';
                $this->style_sort_direction = 'sorting_asc';
            }
        } else {
            $this->sort_direction = 'asc';
            $this->style_sort_direction = 'sorting_asc';
        }

        $this->sort_field = $field;
    }

    public function render()
    {
        $orders = $this->getMainOrders();
        if ($orders->count() < 9) {
            $this->resetPage();
        }
        return view('livewire.order', [
            'orders' => $orders,
        ]);
    }

    public function callOrderModal($order_id)
    {
        $this->emit('openOrderModal', $order_id);
    }

    public function closeOrder($order_id)
    {
        $order = ModelsOrder::find($order_id);
        $user = auth()->user();

        if ($order) {
            if ($order->order_status_id == 3) {
                $order->update(['order_status_id' =>  5]);
            } else {
                $order->update(['order_status_id' => 3]);
            }
        }

        OrderEditor::create([
            'order_id' => $order->id,
            'user_id' => $user->id,
            'action' => 'cancel',
        ]);

        if ($user) {
            if ($user->user_type == 'admin' || $user->user_type == 'superadmin') {
                return redirect()->route('panel.orders')->with('message',  '👍 تم إغلاق الطلب بنجاح',);
            }
        }

        return redirect()->route('panel.orders.marketer')->with('message',  '👍 تم إغلاق الطلب بنجاح',);
    }
}
