<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BussinessApplication;
use Illuminate\Http\Request;

class BusinessApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.business-applications.index',[
            'title' => 'Business Applications',
            'breadcrumbs' => [
                ['label' => 'Business Applications', 'route_name' => 'admin.business-applications.index']
            ]
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.business-applications.create',[
            'title' => 'Create Business Application',
            'breadcrumbs' => [
                ['label' => 'Business Applications', 'route_name' => 'admin.business-applications.index'],
                ['label' => 'Create', 'route_name' => 'admin.business-applications.create']
            ]
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BussinessApplication  $bussinessApplication
     * @return \Illuminate\Http\Response
     */
    public function show(BussinessApplication $bussinessApplication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BussinessApplication  $bussinessApplication
     * @return \Illuminate\Http\Response
     */
    public function edit(BussinessApplication $bussinessApplication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BussinessApplication  $bussinessApplication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BussinessApplication $bussinessApplication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BussinessApplication  $bussinessApplication
     * @return \Illuminate\Http\Response
     */
    public function destroy(BussinessApplication $bussinessApplication)
    {
        //
    }
}
