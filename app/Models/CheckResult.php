<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class CheckResult extends Model
{
    use HasFactory;

    public static function fetch($data)
    {
        return DB::table('student_results as a')
        ->where([['a.roll',$data['roll']],['a.semester',$data['sem']],['a.class',$data['cls']],['a.year',$data['yr']]])
        ->leftJoin('semesters as b', 'a.semester', '=', 'b.id')
        ->leftJoin('mst_classes as c', 'a.class','=','c.id')
        ->leftJoin('students as d','a.roll','=','d.roll')
        ->select('a.*','b.semester_name','c.class_name','d.*')
        ->first();
    }
}
