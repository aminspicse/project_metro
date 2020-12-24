<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentResult;
use App\Models\Semester;
use App\Models\MstClass;
use DB;
use Auth;
class ResultController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return StudentResult::get();
        $data['result'] = StudentResult::get();
        $data['class'] = MstClass::get();
        return view('admin.result.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['semester'] = Semester::all();
        $data['class'] = MstClass::get();
        return view('admin.result.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
   /*     $this->validate($request, [
            'roll' => 'required',
            'year' => 'required',
            'semester_name' => 'required',
            'mark'  => 'required'
        ]);
*/
        //return $request->semester;
        StudentResult::create([
            'roll' => $request->roll,
            'class' => $request->class,
            'semester' => $request->semester,
            'year' => $request->year,
            'mark' => $request->mark,
            'gpa' => ResultController::calculate_gpa($request->mark),
            'grade' => ResultController::calculate_grade($request->mark)
        ]);
        
        return redirect('result/all');
    }

    public function calculate_gpa($mark)
    {
        if($mark >= 80 && $mark <= 100)
        {
            return '5.00';
        }
        else if($mark >= 70  && $mark < 80)
        {
            return '4.00';
        }
        else if($mark >= 65 && $mark < 70)
        {
            return '3.50';
        }
        else if($mark >= 60 && $mark < 65)
        {
            return '3.00';
        }
        else if($mark >= 50 && $mark < 60)
        {
            return '2.00';
        }
        else if($mark >= 40 && $mark < 50)
        {
            return '1.00';
        }
        else
        {
            return '0.00';
        }
    }

    public function calculate_grade($mark)
    {
        if($mark >= 80 && $mark <= 100)
        {
            return 'A+';
        }
        else if($mark >= 70  && $mark < 80)
        {
            return 'A';
        }
        else if($mark >= 65 && $mark < 70)
        {
            return 'A-';
        }
        else if($mark >= 60 && $mark < 65)
        {
            return 'B';
        }
        else if($mark >= 50 && $mark < 60)
        {
            return 'C';
        }
        else if($mark >= 40 && $mark < 50)
        {
            return 'D';
        }
        else
        {
            return 'F';
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['semester'] = Semester::all();
        $data['class'] = MstClass::get();
        $data['res'] = StudentResult::getbyid($id);

        return view('admin.result.edit',$data);
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
        $data = DB::table('student_results')->where('id',$id)->update([
            'class' => $request->class,
            'semester' => $request->semester,
            'year' => $request->year,
            'mark' => $request->mark,
            'gpa' => ResultController::calculate_gpa($request->mark),
            'grade' => ResultController::calculate_grade($request->mark)
        ]);

        return redirect('result/all');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        StudentResult::find($id)->delete();

        return redirect('result/all');
    }
}
