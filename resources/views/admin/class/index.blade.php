@extends('admin.layout')


@section('content')

<div class="card">
            <div class="card-header">
              <div class="row">
                <div class="col-md-6"><h3 class="card-title">Class List</h3></div>
                <div class="col-md-6"><h3 class="card-title"><a href="{{asset('class/create')}}">Create New Class</a></h3></div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Class Name</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($class as $cls)
                      <tr>
                        <td>{{$cls->id}}</td>
                        <td>{{$cls->class_name}}</td>
                        <td>
                          <a href="{{asset('class/edit')}}/{{$cls->id}}" class="btn btn-info">Edit</a>
                          <a href="{{asset('class/delete')}}/{{$cls->id}}" class="btn btn-danger">Delete</a>
                        </td>
                      </tr>
                    @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Class Name</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

@endsection