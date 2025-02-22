<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function edit()
    {
        return view('dashboard.pages.index'); // Ensure the view exists at resources/views/dashboard/profile/edit.blade.php
    }
    public static function login()
    {
        return view('dashboard.auth.login'); // Ensure the view exists at resources/views/dashboard/auth/login.blade.php
    }

    public static function dashboard()
    {
        return view('dashboard.pages.index'); // Ensure the view exists at resources/views/dashboard/pages/index.blade.php
    }

    public static function orders()
    {
        return view('dashboard.orders.index'); // Ensure the view exists at resources/views/dashboard/orders/index.blade.php
    }

    public static function addProduct()
    {
        return view('dashboard.products.add'); // Ensure the view exists at resources/views/dashboard/products/add.blade.php
    }
}