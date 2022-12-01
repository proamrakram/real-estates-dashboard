<?php

namespace App\Http\Livewire;

use App\Http\Controllers\Services\SmsService;
use App\Models\Customer;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

class SMS extends Component
{
    use LivewireAlert;
    use WithPagination;
    protected $listeners = ['updateCustomers'];
    protected $paginationTheme = 'bootstrap';
    public $rows_number = 10;
    public $search = '';
    public $filters = [];

    public $all_customers = false;
    public $all_officers = false;
    public $all_marketers = false;

    public $message = '';
    public $customers_ids = [];
    public $select_all = false;

    public function getCustomers()
    {
        $this->filters['search'] = $this->search;

        return Customer::data()->filters($this->filters)->paginate($this->rows_number);
    }

    public function updated($propertyName)
    {
        if ($propertyName == 'select_all') {
            if ($this->select_all) {
                $this->customers_ids = Customer::all()->pluck('id');
                $this->select_all = true;
            } else {
                $this->customers_ids = [];
                $this->select_all = false;
            }
        }
    }

    public function render()
    {
        $customers = $this->getCustomers();
        if ($customers->count() < 9) {
            $this->resetPage();
        }
        return view('livewire.s-m-s', [
            'customers' => $customers,
            'select_all' => $this->select_all
        ]);
    }

    public function sendAll(SmsService $smsService)
    {
        $smsService->collection($this->all_customers, $this->all_marketers, $this->all_officers, $this->message);
    }


    public function send()
    {
        dd($this->customers_ids, $this->select_all);
    }
}
