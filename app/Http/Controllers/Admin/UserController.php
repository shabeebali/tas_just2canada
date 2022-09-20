<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FormSubmission;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request): View
    {
        $data = User::with('roles')->select('id','name','email');
        $search = $request->input('search');
        if($search)
        {
            $data->where('name','like','%'.$search.'%')->orWhere('email','like','%'.$search.'%');
        }
        $data = $data->paginate(30);
        return view('admin.users.index',[
            'title' => 'Admin Users',
            'breadcrumbs' => [
                ['label' => 'Admin Users', 'route_name' => 'admin.users.index']
            ],
            'data' => $data,
            'search' => $search
        ]);
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit',[
            'user' => $user,
            'title' => 'Edit: '.$user->name,
            'breadcrumbs' => [
                ['label' => 'Admin Users', 'route_name' => 'admin.users.index'],
                ['label' => 'Edit', 'route_name' => 'admin.users.index']
            ],
        ]);
    }
}
