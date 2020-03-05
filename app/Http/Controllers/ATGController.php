<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class ATGController extends Controller
{
    public function index(){
        return View::make('form');
    }
    public function form(){
        
        return view('students.form');
    }
    public function all_Stu(){
        $all_stu=Student::all()->toArray();
        return view('Form.index',compact('all_stu'));
    }
    public function store(Request $req){
        $all_stu=Student::all()->toArray();
        $this->validate($req,[
         'email'=>array(
             'required',
             'regex:/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/'
         ),
         'name'=>'required',
        'pincode'=> array(
            'required',
            'regex:/^[1-9][0-9]{5}$/',
            'max:6',
            'min:6'
        )
      ]);
        $result=Student::where('email',$req->get('email'))->get();
        if (count($result)>0){
            return view('Form.index',['message'=>'Your Data is not saved Duplicate email id.'],compact('all_stu'));
        }
        else{
            $stu= new Student(['email' => $req->get('email'), 'name' => $req->get('name'), 'pincode' => $req->get('pincode')]);
            $stu->save();
            $all_stu=Student::all()->toArray();
            return view('Form.index',['message'=>'Your Data is saved.'],compact('all_stu'));
        }
    }
}
