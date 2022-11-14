<?php

namespace App\Http\Livewire;

use App\Http\Controllers\Services\CustomerService;
use Livewire\Component;

class CreateCustomer extends Component
{
    public $customer;
    public $name = '';
    public $phone = '';
    public $email = null;
    public $identification_number = null;
    public $employer_name = null;
    public $employee_type = null;
    public $is_support = null;
    public $city_id = null;
    public $building_number = null;
    public $street_name = null;
    public $neighborhood_name = null;
    public $zip_code = null;
    public $additional_number = null;
    public $unit_number = null;
    public $status = 1;


    public function render()
    {
        return view('livewire.create-customer');
    }

    protected function rules()
    {
        return [
            'name' => ['required'],
            'phone' => ['required', 'unique:customers,phone'],
            'email' => ['nullable', 'unique:customers,email'],
            'identification_number' => ['nullable', 'numeric', 'unique:customers,nationality_id'],
            'employee_type' => ['nullable', 'in:public,private'],
            'employer_name' => ['nullable'],
            'is_support' => ['nullable', 'in:1,0'],
            'city_id' => ['nullable', 'exists:cities,id'],
            'building_number' => ['nullable', 'numeric', 'unique:customers,building_number'],
            'street_name' => ['nullable'],
            'neighborhood_name' => ['nullable'],
            'zip_code' => ['nullable', 'numeric'],
            'additional_number' => ['nullable', 'numeric'],
            'unit_number' => ['nullable', 'numeric'],
            'status' => ['in:1,2']
        ];
    }

    protected function messages()
    {
        return [
            'name.required' => 'هذا الحقل مطلوب',
            'phone.required' => 'هذا الحقل مطلوب',
            // 'email.required' => 'هذا الحقل مطلوب',
            // 'identification_number.required' => 'هذا الحقل مطلوب كرقم',
            // 'employee_type.required' => 'هذا الحقل مطلوب',
            // 'employer_name.required' => 'هذا الحقل مطلوب',
            // 'is_support.required' => 'هذا الحقل مطلوب',
            // 'city_id.required' => 'هذا الحقل مطلوب',
            // 'building_number.required' => 'هذا الحقل مطلوب كرقم',
            // 'street_name.required' => 'هذا الحقل مطلوب',
            // 'neighborhood_name.required' => 'هذا الحقل مطلوب',
            // 'zip_code.required' => 'هذا الحقل مطلوب كرقم',
            // 'additional_number.required' => 'هذا الحقل مطلوب كرقم',
            // 'unit_number.required' => 'هذا الحقل مطلوب كرقم',

            'phone.unique' => 'هذا الرقم مستخدم مسبقا',
            'email.unique' => 'الايميل مستخدم مسبقا',
            'identification_number.unique' => 'رقم الهوية مستخدم مسبقا',
            'building_number.unique' => 'رقم المبنى موجود مسبقا',

            'employee_type.in' => 'حدث خطا في النظام',
            'is_support.in' => 'حدث خطا في النظام',

            'city_id.exists' => 'حدث خطا في النظام',

            'building_number.numeric' => 'القيمة يجب ان تكون رقم',
            'zip_code.numeric' => 'القيمة يجب ان تكون رقم',
            'additional_number.numeric' => 'القيمة يجب ان تكون رقم',
            'unit_number.numeric' => 'القيمة يجب ان تكون رقم',

        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function store(CustomerService $customerService)
    {
        $validatedData = $this->validate();
        $customerService->store($validatedData);
        return redirect()->route('panel.customers')->with('message',  '👍 تم تحديث العملاء بنجاح',);
    }
}
