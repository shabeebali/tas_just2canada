<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FormSubmission;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class JobSeekerController extends Controller
{
    public function index(Request $request): View
    {
        $data = FormSubmission::select('id','client_id','form_data->full_name as name','form_data->email as email','form_data->current_residence as country')->where('form_type_id',3)->orderBy('created_at','DESC');
        $search = $request->input('search');
        if($search)
        {
            $data->where('form_data->name','like','%'.$search.'%')
                ->orWhere('form_data->email','like','%'.$search.'%')
                ->orWhere('form_data->current_residence','like','%'.$search.'%')
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
        return view('admin.job-seekers.index',[
            'title' => 'Job Seeker Applications',
            'breadcrumbs' => [
                ['label' => 'Job Seeker Applications', 'route_name' => 'admin.job-seekers.index']
            ],
            'data' => $data,
            'columns' => $columns,
            'search' => $search
        ]);
    }

    public function show($id) {
        $model = FormSubmission::with('remarks')->find($id);
        return view('admin.job-seekers.view',[
            'data' => $model,
            'title' => 'Job Seeker Application: '.$model->client_id,
            'breadcrumbs' => [
                ['label' => 'Job Seeker Applications', 'route_name' => 'admin.job-seekers.index'],
                ['label' => $model->client_id, 'route_name' => 'admin.job-seekers.index']
            ],
        ]);
    }

    public function destroy($id): RedirectResponse
    {
        $formSubmission = FormSubmission::find($id);
        $formSubmission->delete();
        return Response::redirectToRoute('admin.job-seekers.index')->with('info','Form Deleted Successfully');
    }
}
