<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.home',[
            'title' => 'Dashboard'
        ]);
    }

    public function settings()
    {
        return view('admin.settings',[
            'title' => 'Settings',
            'breadcrumbs' => [
                ['label' => 'Settings', 'route_name' => 'admin.settings']
            ]
        ]);
    }
}
