<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Str;

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
        $request->validate([
            'title' => 'required|unique:pages',
            'url_key' => 'nullable|unique:pages'
        ]);
        $page = new Page();
        $page->title = $request->input('title');
        $page->url_key = $request->input('url_key') ?? Str::slug($request->input('title'));
        $page->content = $request->input('content');
        $page->active = $request->has('active');
        $page->show_in_main_menu = $request->has('show_in_main_menu');
        $page->save();

        return Response::redirectToRoute('admin.pages.index')->with('success','Page Created Successfully');
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
        return view('admin.pages.edit',[
            'title' => 'Edit Page: '.$page->title,
            'breadcrumbs' => [
                ['label' => 'Pages', 'route_name' => 'admin.pages.index'],
                ['label' => 'Edit', 'route_name' => 'admin.pages.index']
            ],
            'page' => $page
        ]);
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
        $request->validate([
            'title' => 'required|unique:pages,title,'.$page->id,
            'url_key' => 'nullable|unique:pages,url_key,'.$page->id
        ]);
        $page->title = $request->input('title');
        $page->url_key = $request->input('url_key') ?? Str::slug($request->input('title'));
        $page->content = $request->input('content');
        $page->active = $request->has('active');
        $page->show_in_main_menu = $request->has('show_in_main_menu');
        $page->save();

        return Response::redirectToRoute('admin.pages.index')->with('success','Page Updated Successfully');
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
