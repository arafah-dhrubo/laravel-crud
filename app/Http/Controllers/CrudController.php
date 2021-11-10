<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    function showData(){
        // $showData=Crud::all();
        // $showData=Crud::paginate(5);
        $showData=Crud::simplepaginate(5);
        return view('showdata',['showData'=>$showData]);
    }
    function addData(){
        return view('add_data');
    }
    function storeData(Request $request){
        $rules=[
            'name'=>'required|max:10',
            'email'=>'required|email',
        ];
        $cm=[
            'name.required'=>'Enter Your Name',
            'name.max'=>'Max Charecter is 10',
            'email.required'=>'Enter Your Email',
            'email.email'=>'Your Email is not valid'
        ];
        $this->validate($request, $rules, $cm);
        $crud = new Crud();
        $crud->name=$request->name;
        $crud->email=$request->email;
        $crud->save();
        Session()->flash('msg', "Data Successfully Added");
        return redirect()->back();
    }
    function editData($id){
        $editData = Crud::find($id);
        // return $editData;
        return view('edit_data', ["editData"=>$editData]);
    }
    function updateData(Request $request, $id){
        $rules=[
            'name'=>'required|max:10',
            'email'=>'required|email',
        ];
        $cm=[
            'name.required'=>'Enter Your Name',
            'name.max'=>'Max Charecter is 10',
            'email.required'=>'Enter Your Email',
            'email.email'=>'Your Email is not valid'
        ];
        $this->validate($request, $rules, $cm);
        $crud = Crud::find($id);
        $crud->name=$request->name;
        $crud->email=$request->email;
        $crud->save();
        Session()->flash('msg', "Data Successfully Updated");
        return redirect('/');
    }
    function deleteData($id){
        $deleteData = Crud::find($id);
        $deleteData->delete();
        Session()->flash('msg', "Data successfully Deleted");
        return redirect('/');
    }
}
