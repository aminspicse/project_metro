<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class StudentResult extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function get()
    {
        return DB::table('student_results as a')
        ->leftJoin('semesters as b', 'a.semester', '=', 'b.id')
        ->leftJoin('mst_classes as c', 'a.class','=','c.id')
        ->select('a.*','b.semester_name','c.class_name')
        ->get();
    }
    public static function getbyid($id)
    {
        return DB::table('student_results as a')
        ->where('a.id',$id)
        ->leftJoin('semesters as b', 'a.semester', '=', 'b.id')
        ->leftJoin('mst_classes as c', 'a.class','=','c.id')
        ->select('a.*','b.semester_name','c.class_name')
        ->first();
    }
}
