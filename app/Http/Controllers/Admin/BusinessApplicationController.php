<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BussinessApplication;
use App\Models\FormSubmission;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class BusinessApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(Request $request): View
    {
        $data = FormSubmission::select('id','client_id','form_data->name as name','form_data->email as email','form_data->country as country')->where('form_type_id',2);
        $search = $request->input('search');
        if($search)
        {
            $data->where('form_data->name','like','%'.$search.'%')
                ->orWhere('form_data->email','like','%'.$search.'%')
                ->orWhere('form_data->country','like','%'.$search.'%')
                ->orWhere('client_id','like','%'.$search.'%');
        }
        $data = $data->paginate(30);
        $columns = [
            ['label' => 'ID', 'field' => 'id', 'align' => 'left', 'sortable' => true],
            ['label' => 'Client ID', 'field' => 'client_id', 'align' => 'left', 'sortable' => true,'link' => true],
            ['label' => 'Name', 'field' => 'name', 'align' => 'left', 'sortable' => true],
            ['label' => 'Email', 'field' => 'email', 'align' => 'left', 'sortable' => true],
            ['label' => 'Country', 'field' => 'country', 'align' => 'left', 'sortable' => true],
        ];
        return view('admin.business-applications.index',[
            'title' => 'Business Applications',
            'breadcrumbs' => [
                ['label' => 'Business Applications', 'route_name' => 'admin.business-applications.index']
            ],
            'data' => $data,
            'columns' => $columns,
            'search' => $search
        ]);
    }

    public function show($id) {
        $model = FormSubmission::with('remarks')->find($id);
        return view('admin.business-applications.view',[
            'data' => $model,
            'title' => 'Business Application: '.$model->client_id,
            'breadcrumbs' => [
                ['label' => 'Business Applications', 'route_name' => 'admin.business-applications.index'],
                ['label' => $model->client_id, 'route_name' => 'admin.business-applications.index']
            ],
        ]);
    }

    public function destroy($id)
    {
        $formSubmission = FormSubmission::find($id);
        $formSubmission->delete();
        return Response::redirectToRoute('admin.business-applications.index')->with('info','Form Deleted Successfully');
    }
}
