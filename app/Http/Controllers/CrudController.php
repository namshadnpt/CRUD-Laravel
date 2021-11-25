<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrudController extends Controller
{

    private $crud_model;

    public function __construct()
    {
        $this->crud_model = new \App\Models\Crud;
    }

    public function index()
    {
        //
        $data = $this->crud_model->get_list_data();
        return view('index', compact('data'));
    }

    public function add($id = 0)
    {
        $data['genders'] = ['Male', 'Female'];
        $data['languages'] = ['English', 'Malayalam', 'Arabic', 'Hindi'];

        if ($id > 0) {
            $data['res'] = $this->crud_model->get_row($id);
        }
        return view('add', $data);
    }


    public function create(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'gender' => 'required',
        ]);

        $data = [
            'name' => $request->get('name'),
            'age' => $request->get('age'),
            'gender' => $request->get('gender'),
            'willing_to_work' => $request->get('willing_to_work') ?: 0,
            'language_1' => @$request->get('language_1') ?: 0,
            'language_2' => @$request->get('language_2') ?: 0,
            'language_3' => @$request->get('language_3') ?: 0,
            'language_4' => @$request->get('language_4') ?: 0,
        ];

        if (@$request->get('id') > 0) {
            $id = @$request->get('id')?:0;
        } else {
            $id = 0;
            $data['created_date'] = date('Y-m-d H:i:s');
        }
        //
        $this->crud_model->save_data($data, $id);
        return redirect()->to('/')
            ->with('success', 'created successfully.');
    }




    public function delete($id = 0)
    {
        //
        $this->crud_model->delete_row($id);
        return redirect()->to('/')
            ->with('success', 'Deleted successfully.');
    }
}
