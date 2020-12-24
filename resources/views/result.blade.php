@extends('landlayout')

@section('content')

    <div class="row">
        <div class="col-md-6 offset-3">
        
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Fatch Student Result</h3>
                </div>
                <div class="card-body">
                    <div>
                        <form action="" method="get"> 
                                <div class="form-group">
                                    <select name="class" id="" class="form-control">
                                        @foreach($class as $cls)
                                            <option value="{{$cls->id}}">{{$cls->class_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            <div class="form-group">
                                <select name="semester"  class="form-control" id="">
                                    @foreach($semester as $sem)
                                        <option value="{{$sem->id}}">{{$sem->semester_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <select name="year" id="" class="form-control">
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2021">2021</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" name="roll" class="form-control">
                            </div>
                            <button class="btn btn-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                @if($res != null)
                    <table class="table table-striped">
                        <tr><td>Roll: </td><td>{{$res->roll}}</td></tr>
                        <tr><td>Name: </td><td>{{$res->name}}</td></tr>
                        <tr><td>Father Name: </td><td>{{$res->fname}}</td></tr>
                        <tr><td>Mother Name: </td><td>{{$res->mname}}</td></tr>
                        <tr><td>Class: </td><td>{{$res->class_name}}</td></tr>
                        <tr><td>Semester: </td><td>{{$res->semester_name}}</td></tr>
                        <tr><td>Year: </td><td>{{$res->year}}</td></tr>
                        <tr><td>GPA: </td><td>{{$res->gpa}}</td></tr>
                        <tr><td>Grade: </td><td>{{$res->grade}}</td></tr>
                    </table>
                @endif
            </div>
        </div>
    </div>
    <!-- CSS only -->

@endsection