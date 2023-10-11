<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Student;
use PDF; 


class StudentController extends Controller
{

    public function login(Request $request) {
        $data = User::where('email', $request->email)->where('password',$request->password)->first();
        if(isset($data)){
            return redirect()->route('list');
        }else{
            return view('login');
        }
    }
 
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $data = Student::get();

      return view('students/list', ["data"=> $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students/add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $total = 0; 
        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->status = 0;
        $total = $request->sub1 + $request->sub2 + $request->sub3;
        $student->sub1 = $request->sub1;
        $student->sub2 = $request->sub2;
        $student->sub3 = $request->sub3;

        $student->total = $total;

        if($student->save()){
            return redirect()->route('list');
        }else{
            return view('students/add');
        }

         
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $stu_data = Student::find($id);

        return view('students/edit', ['data'=>$stu_data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $stu_data = Student::find($id);
        $stu_data->name = $request->name;
        $stu_data->email = $request->email;
        $stu_data->phone = $request->phone;
        $stu_data->status = 0;
        $stu_data->sub1 = $request->sub1;
        $stu_data->sub2 = $request->sub2;
        $stu_data->sub3 = $request->sub3;
        $stu_data->total = $request->total;
        if($stu_data->save()){
            return redirect()->route('list');
        }else{
            return "err";
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Student::find($id)->delete();
        return redirect()->route('list');
    }

    public function soft_destroy(string $id)
    {
        $data = Student::find($id)->delete();
        return redirect()->route('list');
    }

    public function pdf_generate(Request $request, $id) {
        $items = Student::where('id',$id)->get();
       
        $pdf = PDF::loadView('students/pdfview', ["data"=> $items]);
        return $pdf->download('pdfview.pdf');
         
    }
 
}
