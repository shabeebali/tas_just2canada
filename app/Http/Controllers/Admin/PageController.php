<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Page::select('id','title','url_key')->paginate(20);
        $columns = [
            ['label' => 'ID', 'field' => 'id', 'align' => 'left', 'sortable' => true],
            ['label' => 'Page Title', 'field' => 'title', 'align' => 'left', 'sortable' => true],
            ['label' => 'Path', 'field' => 'url_key', 'align' => 'left', 'sortable' => true],
        ];
        return view('admin.pages.index',[
            'title' => 'Pages',
            'breadcrumbs' => [
                ['label' => 'Pages', 'route_name' => 'admin.pages.index']
            ],
            'data' => $data,
            'columns' => $columns
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.create',[
            'title' => 'Create Page',
            'breadcrumbs' => [
                ['label' => 'Pages', 'route_name' => 'admin.pages.index'],
                ['label' => 'Create', 'route_name' => 'admin.pages.create']
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
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        //
    }
}
