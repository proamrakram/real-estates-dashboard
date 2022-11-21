<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderEditor;

class OrderService extends Controller
{
    public function getCustomer($data)
    {
        $customer_phone = Customer::where('phone', $data['customer_phone'])->first();
        $customer_card = Customer::where('nationality_id', $data['customer_phone'])->first();
        if ($customer_phone) {
            return $customer_phone;
        } elseif ($customer_card) {
            return $customer_card;
        } else {
            return $this->createCustomer($data);
        }
    }

    public function createCustomer($data)
    {
        return Customer::create([
            'user_id' => auth()->id(),
            'name' => $data['customer_name'],
            'phone' => $data['customer_phone'],
            'employer_name' => $data['employer_name'],
            'city_id' => $data['city_id'],
            'support_eskan' => $data['support_eskan'],
            'employee_type' => $data['employee_type'],
            'status' => '1',
            'who_add' => auth()->id(),
        ]);
    }

    public function store($data)
    {
        $customer = $this->getCustomer($data);
        $user = auth()->user();

        $order = Order::create([
            'order_code' => '',
            'customer_name' => $customer->name,
            'customer_phone' => $customer->phone,
            'employer_name' => $data['employer_name'],
            'employee_type' => $data['employee_type'],
            'order_status_id' => 1,
            'property_type_id' => $data['property_type_id'],
            'city_id' => $data['city_id'],
            'branch_id' => $data['branch_id'],
            'area' => $data['area'],
            'price_from' => $data['price_from'],
            'price_to' => $data['price_to'],
            'desire_to_buy_id' => $data['desire_to_buy_id'],
            'purch_method_id' => $data['purch_method_id'],
            'avaliable_amount' => $data['avaliable_amount'],
            'assign_to' => $user->user_type == 'marketer' ?  $user->id : $data['assign_to'],
            'support_eskan' => $data['support_eskan'],
            'notes' => $data['notes'],

            'customer_id' => $customer->id,
            'user_id' => auth()->id(),
            'who_create' => auth()->id(),
            'assign_to_date' => $data['assign_to'] ? now() : null,

            // 'offer_id' => $data['offer_id'],
            // 'closed_date' => $data['closed_date'],
            // 'who_edit' => $data['who_edit'],
            // 'who_cancel' => $data['who_cancel'],
        ]);

        $branch = Branch::find($data['branch_id']);

        if ($branch && $order) {
            $order_code = ucwords($branch->code) . '-' . $order->id . '-' . 'USR' . auth()->id();
            $order->update(['order_code' => $order_code]);
        }

        OrderEditor::create([
            'order_id' => $order->id,
            'user_id' =>  $user->id,
            'action' => 'add',
        ]);
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

        if ($data['assign_to'] && $order->assign_to != $data['assign_to']) {
            $order->update([
                'assign_to_date' => now(),
                'order_status_id' => 1,
            ]);
        }

        $user = auth()->user();


        OrderEditor::create([
            'order_id' => $order->id,
            'user_id' =>  $user->id,
            'action' => 'edit',
        ]);
    }
}
