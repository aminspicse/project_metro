@extends('admin.layout')


@section('content')

<div class="card">
            <div class="card-header">
              <div class="row">
                <div class="col-md-6"><h3 class="card-title">All Student List</h3></div>
                <div class="col-md-6"><h3 class="card-title"><a href="{{asset('student/create')}}">Create New Student</a></h3></div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Roll</th>
                  <th>Name</th>
                  <th>Father Name</th>
                  <th>Mother Name</th>
                  <th>Mobile</th>
                  <th>Photo</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($student as $std)
                        <tr>
                            <td>{{$std->roll}}</td>
                            <td>{{$std->name}}</td>
                            <td>{{$std->fname}}</td>
                            <td>{{$std->mname}}</td>
                            <td>{{$std->mobile}}</td>
                            <td><img src="{{asset($std->photo)}}" width="50px" alt=""></td>
                            <td>
                                <a href="{{asset('/student/show')}}/{{$std->id}}" class="btn btn-small">View</a>
                                <a href="{{asset('/student/edit')}}/{{$std->id}}" class="btn btn-small btn-info">Edit</a>
                                <a href="{{asset('/student/destroy')}}/{{$std->id}}" class="btn btn-small btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Roll</th>
                  <th>Name</th>
                  <th>Father Name</th>
                  <th>Mother Name</th>
                  <th>Mobile</th>
                  <th>Photo</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

@endsection