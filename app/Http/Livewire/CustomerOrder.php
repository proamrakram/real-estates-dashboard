<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CustomerOrder extends Component
{
    public $first = 'active';
    public $second = '';
    public $third = '';

    public function sequencing($form)
    {
        $this->first = '';
        $this->second = '';
        $this->third = '';
        if ($form == 'first') {
            $this->first = 'active';
        }

        if ($form == 'second') {
            $this->second = 'active';
        }

        if ($form == 'third') {
            $this->third = 'active';
        }
    }

    public function render()
    {
        return view('livewire.customer-order');
    }
}
