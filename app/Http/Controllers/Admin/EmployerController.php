<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employer;
use App\Models\FormSubmission;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class EmployerController extends Controller
{
    public function index(Request $request): View
    {
        $data = FormSubmission::select('id','client_id','form_data->name as name','form_data->email as email')->where('form_type_id',4)->orderBy('created_at','DESC');
        $search = $request->input('search');
        if($search)
        {
            $data->where('form_data->name','like','%'.$search.'%')
                ->orWhere('form_data->email','like','%'.$search.'%')
                ->orWhere('client_id','like','%'.$search.'%');
        }
        $data = $data->paginate(30);
        $columns = [
            ['label' => 'ID', 'field' => 'id', 'align' => 'left', 'sortable' => true],
            ['label' => 'Client ID', 'field' => 'client_id', 'align' => 'left', 'sortable' => true,'link' => true],
            ['label' => 'Name', 'field' => 'name', 'align' => 'left', 'sortable' => true],
            ['label' => 'Email', 'field' => 'email', 'align' => 'left', 'sortable' => true],
        ];
        return view('admin.employers.index',[
            'title' => 'Employer Document Information',
            'breadcrumbs' => [
                ['label' => 'Employer Document Information', 'route_name' => 'admin.employers.index']
            ],
            'data' => $data,
            'columns' => $columns,
            'search' => $search
        ]);
    }

    public function show($id) {
        $model = FormSubmission::with('remarks')->find($id);
        return view('admin.employers.view',[
            'data' => $model,
            'title' => 'Employer Document Information: '.$model->client_id,
            'breadcrumbs' => [
                ['label' => 'Employer Document Information', 'route_name' => 'admin.employers.index'],
                ['label' => $model->client_id, 'route_name' => 'admin.employers.index']
            ],
        ]);
    }

    public function destroy($id): RedirectResponse
    {
        $model = Employer::find($id);
        $model->delete();
        return Response::redirectToRoute('admin.employers.index')->with('info','Form Deleted Successfully');
    }
}
