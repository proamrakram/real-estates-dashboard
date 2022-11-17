<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderEditor;

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
            'assign_to' => $data['assign_to'] ?? null,
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

        $user = auth()->user();

        OrderEditor::create([
            'order_id' => $order->id,
            'user_id' =>  $user->id,
            'action' => 'add',
        ]);

        if ($user) {

            if ($user->user_type == 'marketer') {
                return redirect()->route('panel.orders.marketer')->with('message',  '👍 تم تحديث الطلبات بنجاح',);
            }
        }
        return redirect()->route('panel.orders')->with('message',  '👍 تم تحديث الطلبات بنجاح');
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
            ]);
        }

        $user = auth()->user();


        OrderEditor::create([
            'order_id' => $order->id,
            'user_id' =>  $user->id,
            'action' => 'edit',
        ]);

        if ($user) {

            if ($user->user_type == 'marketer') {
                return redirect()->route('panel.orders.marketer')->with('message',  '👍 تم تحديث الطلبات بنجاح',);
            }
        }
        return redirect()->route('panel.orders')->with('message',  '👍 تم تحديث الطلبات بنجاح',);
    }
}
