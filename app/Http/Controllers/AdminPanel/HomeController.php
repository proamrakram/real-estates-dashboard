<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('admin-panel.home');
    }

    public function users()
    {
        return view('admin-panel.users');
    }

    public function offers()
    {
        return view('admin-panel.offers');
    }

    public function reservations()
    {
        return view('admin-panel.reservations');
    }

    public function orders()
    {
        return view('admin-panel.orders');
    }

    public function clients()
    {
        return view('admin-panel.clients');
    }

    public function selles()
    {
        return view('admin-panel.selles');
    }

    public function branchs()
    {
        $branches = Branch::all();
        return view('admin-panel.branchs', compact(['branches']));
    }

    public function mediators()
    {
        return view('admin-panel.mediators');
    }

    public function sendSMS()
    {
        return view('admin-panel.sendSMS');
    }

    public function createUserInfo()
    {
        return view('admin-panel.forms.create-user-info');
    }

    public function createUserPermissions($email)
    {
        return view('admin-panel.forms.create-user-permissions', [
            'email' => $email
        ]);
    }

    public function createSell()
    {
        return view('admin-panel.create-sell');
    }

    public function createOffer()
    {
        return view('admin-panel.create-offer');
    }

    public function editUser()
    {
        dd('ok');
        // return view('');
    }

    public function editSell()
    {
        // return view('');
    }

    public function editOffer()
    {
        // return view('');
    }
}
