@extends('admin.layout')


@section('content')

<div class="card">
            <div class="card-header">
              <div class="row">
                <div class="col-md-6"><h3 class="card-title">Semester List</h3></div>
                <div class="col-md-6"><h3 class="card-title"><a href="{{asset('semester/create')}}">Create New Semester</a></h3></div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Semester Name</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($semester as $sem)
                      <tr>
                        <td>{{$sem->id}}</td>
                        <td>{{$sem->semester_name}}</td>
                        <td>
                          <a href="{{asset('semester/edit')}}/{{$sem->id}}" class="btn btn-info">Edit</a>
                          <a href="{{asset('semester/delete')}}/{{$sem->id}}" class="btn btn-danger">Delete</a>
                        </td>
                      </tr>
                    @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Semester Name</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

@endsection