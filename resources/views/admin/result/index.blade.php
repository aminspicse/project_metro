@extends('admin.layout')


@section('content')

<div class="card">
            <div class="card-header">
              <div class="row">
                <div class="col-md-6"><h3 class="card-title">Result List</h3></div>
                <div class="col-md-6"><h3 class="card-title"><a href="{{asset('result/create')}}">Create New Student Result</a></h3></div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Roll</th>
                  <th>Class</th>
                  <th>Semester Name</th>
                  <th>Year</th>
                  <th>Mark</th>
                  <th>GPA</th>
                  <th>Grade</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($result as $res)
                      <tr>
                        <td>{{$res->id}}</td>
                        <td>{{$res->roll}}</td>
                        <td>{{$res->class_name}}</td>
                        <td>{{$res->semester_name}}</td>
                        <td>{{$res->year}}</td>
                        <td>{{$res->mark}}</td>
                        <td>{{$res->gpa}}</td>
                        <td>{{$res->grade}}</td>
                        <td>
                          <a href="{{asset('result/edit')}}/{{$res->id}}" class="btn btn-info">Edit</a>
                          <a href="{{asset('result/delete')}}/{{$res->id}}" class="btn btn-danger">Delete</a>
                        </td>
                      </tr>
                    @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Roll</th>
                  <th>Class</th>
                  <th>Semester Name</th>
                  <th>Year</th>
                  <th>Mark</th>
                  <th>GPA</th>
                  <th>Grade</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

@endsection