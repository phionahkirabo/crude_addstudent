<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class studentController extends Controller
{
    public function index(){
        //return view('student-list');
        $data = student::get();
        //return $data;
        return view('studentlist',compact('data'));
    }
    public function addStudent(){
  return view('add-student');
    }
    public function saveStudent(Request $request){
        // $request->validate([
        //     'name'=> 'required',
        //     'email'=> 'required',
        //     'phone'=> 'required',
        //     'addres'=> 'required',

        // ]);
$name =$request->name;
$email =$request->email;
$phone =$request->phone;
$address =$request->address;

$stu = new student();
$stu->name = $name;
$stu->email = $email;
$stu->phone = $phone;
$stu->addres= $address;
$stu->save();
return redirect()->back()->with('success','student Added successfully');
    }
public function editStudent($id){
    $data = student::where('id','=',$id)->first();
    // return $data;
    return view('editstudent',compact('data'));
}
public function updatestudent(Request $request,$id){
    // $request->validate([
    //     'name'=> 'required',
    //     'email'=> 'required',
    //     'phone'=> 'required',
    //     'addres'=> 'required',

    // ]);
    //return ('update here');
$name =$request->name;
$email =$request->email;
$phone =$request->phone;
$address =$request->address;
student::where('id','=',$id)->update([
    'name'=> $name,
    'email'=> $email,
    'phone'=> $phone,
    'addres'=> $address,
]);
return redirect('/studentlist')->with('success','student updated successfully');
}
public function deletestudent($id){
student::where('id','=',$id)->delete();
return redirect('/studentlist')->with('success','student deleted successfully');
}
}
