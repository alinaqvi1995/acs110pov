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
}
