<?php

namespace App\Http\Livewire;

use App\Models\Customer as ModelsCustomer;
use Livewire\Component;
use Livewire\WithPagination;

class Customer extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $rows_number = 10;
    public $search;
    public $customer_status = null;
    public $filters = [];

    public function getCustomers()
    {
        $this->customer_status == 'all' ? $this->customer_status = null : null;

        $this->filters['search'] = $this->search;
        $this->filters['customer_status'] = $this->customer_status;

        return ModelsCustomer::data()->filters($this->filters)->paginate($this->rows_number);
    }

    public function changeCustomerStatus($customer_id)
    {
        $customer = ModelsCustomer::find($customer_id);
        if ($customer) {
            if ($customer->status == 1) {
                $customer->update(['status' => 2]);
            } else {
                $customer->update(['status' => 1]);
            }
        }
    }

    public function render()
    {
        $customers = $this->getCustomers();
        if ($customers->count() < 9) {
            $this->resetPage();
        }

        return view('livewire.customer', [
            'customers' => $customers
        ]);
    }
}
