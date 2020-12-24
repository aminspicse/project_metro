<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;
use DB;
use App\Models\MstClass;
use App\Models\Semester;
use App\Models\StudentResult;
use App\Models\CheckResult;
class CheckResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['class'] = MstClass::all();
        $data['semester'] = Semester::all();

            $data['cls']  = null;
            $data['sem']  = null;
            $data['yr']  = null;
            $data['roll']  = null;
            //$data['res'] =  CheckResult::fetch($data); 

            $data['cls']  = request('class');
            $data['sem']  = request('semester');
            $data['yr']  = request('year');
            $data['roll']  = request('roll');
            $data['res'] =  CheckResult::fetch($data); 

            return view('result',$data);
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return DB::table('students')->where('roll',2)->get();
        Student::where('roll',$id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
