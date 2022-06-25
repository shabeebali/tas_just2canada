<?php

namespace App\Http\Controllers;

use App\Models\FormRemark;
use Illuminate\Http\Request;

class FormRemarkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'remark' => 'required'
        ]);
        $model = FormRemark::create($request->only([
            'remark',
            'next_follow',
            'quoted_fee',
            'form_submission_id'
        ]));
        // dd($request->toArray());
        if($request->file('file_1')) {
            $path = $request->file('file_1')->store('files','public');
            $model->file_1 = $path;
        }
        if($request->file('file_2')) {
            $path = $request->file('file_2')->store('files','public');
            $model->file_2 = $path;
        }
        if($request->file('file_3')) {
            $path = $request->file('file_3')->store('files','public');
            $model->file_3 = $path;
        }
        if($request->file('file_4')) {
            $path = $request->file('file_4')->store('files','public');
            $model->file_4 = $path;
        }
        $model->save();
        return redirect(route('admin.business-applications.show',$request->input('form_submission_id')));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FormRemark  $formRemark
     * @return \Illuminate\Http\Response
     */
    public function show(FormRemark $formRemark)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FormRemark  $formRemark
     * @return \Illuminate\Http\Response
     */
    public function edit(FormRemark $formRemark)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FormRemark  $formRemark
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FormRemark $formRemark)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FormRemark  $formRemark
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormRemark $formRemark)
    {
        //
    }
}
