<?php

use App\Models\Branch;
use App\Models\City;
use App\Models\Customer;
use App\Models\DesireToBuy;
use App\Models\Direction;
use App\Models\LandType;
use App\Models\Licensed;
use App\Models\OfferType;
use App\Models\Order;
use App\Models\OrderNoteStatuse;
use App\Models\OrderStatus;
use App\Models\PriceType;
use App\Models\PropertyStatus;
use App\Models\PropertyType;
use App\Models\PurchaseMethod;
use App\Models\Street;
use App\Models\User;

if (!function_exists('getCities')) {
    function getCities()
    {
        return City::data()->where('status', 1)->get();
    }
}


if (!function_exists('getUserMarketers')) {
    function getUserMarketers()
    {
        return User::data()->where('user_type', 'marketer')->where('user_status', 'active')->get();
    }
}

if (!function_exists('getUsersCount')) {
    function getUsersCount()
    {
        return User::all()->count();
    }
}

if (!function_exists('getOrderStatuses')) {
    function getOrderStatuses()
    {
        return OrderStatus::all();
    }
}

if (!function_exists('getBranches')) {
    function getBranches()
    {
        return Branch::where('status', 1)->get();
    }
}

if (!function_exists('getDesireToBuys')) {
    function getDesireToBuys()
    {
        return DesireToBuy::data()->get();
    }
}


if (!function_exists('getOrderNoteStatuse')) {
    function getOrderNoteStatuse()
    {
        return OrderNoteStatuse::data()->get();
    }
}


if (!function_exists('getPurchaseMethods')) {
    function getPurchaseMethods()
    {
        return PurchaseMethod::data()->get();
    }
}

if (!function_exists('getPropertyTypes')) {
    function getPropertyTypes()
    {
        return PropertyType::data()->get();
    }
}

if (!function_exists('getPropertyStatues')) {
    function getPropertyStatues()
    {
        return PropertyStatus::data()->get();
    }
}

if (!function_exists('offerTypes')) {
    function offerTypes()
    {
        return OfferType::data()->get();
    }
}

if (!function_exists('priceTypes')) {
    function priceTypes()
    {
        return PriceType::data()->get();
    }
}


if (!function_exists('directions')) {
    function directions()
    {
        return Direction::data()->get();
    }
}


if (!function_exists('streets')) {
    function streets()
    {
        return Street::data()->get();
    }
}

if (!function_exists('landTypes')) {
    function landTypes()
    {
        return LandType::data()->get();
    }
}

if (!function_exists('licensedes')) {
    function licensedes()
    {
        return Licensed::data()->get();
    }
}

if (!function_exists('getPropertyTypeName')) {
    function getPropertyTypeName($id)
    {
        $property_type = PropertyType::find($id);
        if ($property_type) {
            return $property_type->name;
        } else {
            return 'غير موجود';
        }
    }
}

if (!function_exists('getOrderStatusName')) {
    function getOrderStatusName($id)
    {
        $order_status = OrderStatus::find($id);
        if ($order_status) {
            return $order_status->name;
        } else {
            return 'غير موجود';
        }
    }
}


if (!function_exists('getCityName')) {
    function getCityName($id)
    {
        $city = City::find($id);
        if ($city) {
            return $city->name;
        } else {
            return 'غير موجود';
        }
    }
}

if (!function_exists('getCustomerName')) {
    function getCustomerName($id)
    {
        $customer = Customer::find($id);
        if ($customer) {
            return $customer->name;
        } else {
            return 'غير موجود';
        }
    }
}

if (!function_exists('getBranchName')) {
    function getBranchName($id)
    {
        $branch = Branch::find($id);
        if ($branch) {
            return $branch->name;
        } else {
            return 'غير موجود';
        }
    }
}


if (!function_exists('getPurchMethodName')) {
    function getPurchMethodName($id)
    {
        $purchase_method = PurchaseMethod::find($id);
        if ($purchase_method) {
            return $purchase_method->name;
        } else {
            return 'غير موجود';
        }
    }
}

if (!function_exists('getDesireToBuyName')) {
    function getDesireToBuyName($id)
    {
        $desire_to_buy = DesireToBuy::find($id);
        if ($desire_to_buy) {
            return $desire_to_buy->name;
        } else {
            return 'غير موجود';
        }
    }
}

if (!function_exists('getUserName')) {
    function getUserName($user_id)
    {
        $user = User::find($user_id);
        if ($user) {
            return $user->name;
        } else {
            return null;
        }
    }
}
