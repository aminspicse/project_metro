<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use DB;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['student'] = Student::all();
        return view('admin.student.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'roll' => 'required',
            'name' => 'required',
            'fname' => 'required',
            'mname' => 'required',
            'mobile' => 'required',
            'present_address' => 'required',
            'permanent_address' => 'required',
        ]);
        $filename = $request->file->store('image');
        $data = Student::create([
            'roll' => $request->roll,
            'name' => $request->name,
            'fname' => $request->fname,
            'mname' => $request->mname,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'present_address' => $request->present_address,
            'permanent_address' => $request->permanent_address,
            'photo'     => 'storage/'.$filename,
        ]);

        return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['std'] = DB::table('students')->where('id',$id)->first();
        return view('admin.student.show',$data);
    }
//01994426821
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['std'] = DB::table('students')->where('id',$id)->first();
        return view('admin.student.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = DB::table('students')->where('id',$id)->update([
            'roll' => $request->roll,
            'name' => $request->name,
            'fname' => $request->fname,
            'mname' => $request->mname,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'present_address' => $request->present_address,
            'permanent_address' => $request->permanent_address,
            //'photo'     => 'storage/'.$filename,
        ]);
    
        return redirect('/student');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::find($id)->delete();
        return redirect('/student');
    }
}
