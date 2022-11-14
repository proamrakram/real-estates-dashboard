<?php

namespace App\Http\Livewire;

use App\Models\Order as ModelsOrder;
use Livewire\Component;
use Livewire\WithPagination;

class Order extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $oo_rows_number = 10;

    public $oo_search = '';
    public $oo_sort_field = 'id';
    public $oo_sort_direction = 'asc';
    public $oo_style_sort_direction = 'sorting_asc';

    public $oo_order_status_id = null;
    public $oo_property_type_id = null;
    public $oo_city_id = null;
    public $oo_branch_type_id = null;
    public $oo_filters = [];

    public function getMainOrders()
    {
        $this->oo_order_status_id == 'all' ? $this->oo_order_status_id = null : null;
        $this->oo_property_type_id == 'all' ? $this->oo_property_type_id = null : null;
        $this->oo_city_id == 'all' ? $this->oo_city_id = null : null;
        $this->oo_branch_type_id == 'all' ? $this->oo_branch_type_id = null : null;

        $this->oo_filters['order_status_id'] = $this->oo_order_status_id;
        $this->oo_filters['property_type_id'] = $this->oo_property_type_id;
        $this->oo_filters['city_id'] = $this->oo_city_id;
        $this->oo_filters['branch_type_id'] = $this->oo_branch_type_id;
        $this->oo_filters['search'] = $this->oo_search;
        $data = ModelsOrder::data()->where('assign_to', null)->filters($this->oo_filters)->orderBy($this->oo_sort_field, $this->oo_sort_direction)->paginate($this->oo_rows_number);
        return $data;
    }

    public function oo_sortBy($field)
    {
        if ($this->oo_sort_field == $field) {
            if ($this->oo_sort_direction === 'asc') {
                $this->oo_sort_direction = 'desc';
                $this->oo_style_sort_direction = 'sorting_desc';
            } else {
                $this->oo_sort_direction = 'asc';
                $this->oo_style_sort_direction = 'sorting_asc';
            }
        } else {
            $this->oo_sort_direction = 'asc';
            $this->oo_style_sort_direction = 'sorting_asc';
        }

        $this->oo_sort_field = $field;
    }

    public function render()
    {
        $main_orders = $this->getMainOrders();


        return view('livewire.order', [
            'main_orders' => $main_orders,
        ]);
    }

    public function callOrderModal($order_id)
    {
        $this->emit('openOrderModal', $order_id);
    }
}
