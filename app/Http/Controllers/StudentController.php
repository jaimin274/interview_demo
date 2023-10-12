<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Student;
use App\Models\Subject;
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
      
        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->status = 0;
        
      
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

    public function get_student() {
        $student = Student::get();
        return response()->json(["data"=>$student]);
    }

    public function pdf_generate(Request $request, $id) {
         $items = Student::with('subject')->where('id',$id)->get();
       
        $pdf = PDF::loadView('students/pdfview', ["data"=> $items]);
        return $pdf->download('pdfview.pdf');   
    }

    public function add_subject(){
        return view('students/subjectadd');
    }
    
    public function store_subject(Request $request){
        $data = new Subject();
        $total = 0;
        $total = $request->sub1 + $request->sub2 + $request->sub3;

        $data->student_id = $request->student_id;
        $data->sub1 = $request->sub1;
        $data->sub2 = $request->sub2;
        $data->sub3 = $request->sub3;
        $data->total = $total;
        $data->save();
        return view('students/subjectadd');
    }
    
 
}
