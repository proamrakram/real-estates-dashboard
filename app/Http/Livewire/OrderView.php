<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;

class OrderView extends Component
{
    public $order;

    public function mount($order_id)
    {
        $this->order = Order::find($order_id);
    }

    public function render()
    {
        return view('livewire.order-view', [
            'order' => $this->order,
        ]);
    }
}
