<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CustomerOrder extends Component
{
    public $first = 'active';
    public $second = '';
    public $third = '';

    public function render()
    {
        return view('livewire.customer-order');
    }
}
