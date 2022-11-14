<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Order;

class OrderService extends Controller
{
    public function getCustomer($customer_phone_card, $name)
    {
        $customer_phone = Customer::where('phone', $customer_phone_card)->first();
        $customer_card = Customer::where('nationality_id', $customer_phone_card)->first();

        if ($customer_phone) {
            return $customer_phone;
        } elseif ($customer_card) {
            return $customer_card;
        } else {
            return $this->createCustomer($customer_phone_card, $name);
        }
    }

    public function createCustomer($phone, $name)
    {
        return Customer::create([
            'phone' => $phone,
            'name' => $name,
        ]);
    }

    public function store($data)
    {
        $customer = $this->getCustomer($data['customer_phone'], $data['customer_name']);
        $order = Order::create([
            'customer_name' => $customer->name,
            'customer_phone' => $customer->phone,
            'employer_name' => $data['employer_name'],
            'employee_type' => $data['employee_type'],
            'order_status_id' => $data['order_status_id'],
            'property_type_id' => $data['property_type_id'],
            'city_id' => $data['city_id'],
            'branch_id' => $data['branch_id'],
            'area' => $data['area'],
            'price_from' => $data['price_from'],
            'price_to' => $data['price_to'],
            'desire_to_buy_id' => $data['desire_to_buy_id'],
            'purch_method_id' => $data['purch_method_id'],
            'avaliable_amount' => $data['avaliable_amount'],
            'assign_to' => $data['assign_to'] ?? null,
            'support_eskan' => $data['support_eskan'],
            'notes' => $data['notes'],

            'customer_id' => $customer->id,
            'user_id' => auth()->id(),
            // 'offer_id' => $data['offer_id'],
            // 'closed_date' => $data['closed_date'],
            // 'who_edit' => $data['who_edit'],
            // 'who_cancel' => $data['who_cancel'],
        ]);

        return redirect()->route('panel.orders')->with('message',  '👍 تم تحديث الطلبات بنجاح',);
    }

    public function update($order, $data)
    {
        $order->update([
            'customer_name' => $order->customer_name,
            'customer_phone' => $order->customer_phone,
            'employer_name' => $data['employer_name'],
            'employee_type' => $data['employee_type'],
            'order_status_id' => $data['order_status_id'],
            'property_type_id' => $data['property_type_id'],
            'city_id' => $data['city_id'],
            'branch_id' => $data['branch_id'],
            'area' => $data['area'],
            'price_from' => $data['price_from'],
            'price_to' => $data['price_to'],
            'desire_to_buy_id' => $data['desire_to_buy_id'],
            'purch_method_id' => $data['purch_method_id'],
            'avaliable_amount' => $data['avaliable_amount'],
            'assign_to' => $data['assign_to'] ?? null,
            'support_eskan' => $data['support_eskan'],
            'notes' => $data['notes'],

            'customer_id' => $order->customer_id,
            'user_id' => auth()->id(),
            // 'offer_id' => $data['offer_id'],
            // 'closed_date' => $data['closed_date'],
            'who_edit' => auth()->id(),
            // 'who_cancel' => $data['who_cancel'],
        ]);
    }
}
