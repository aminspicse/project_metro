@extends('admin.layout')

@section('content')

<div class="card card-primary">
              
              <form role="form" action="{{asset('/semester/update')}}/{{$sem->id}}" method="post" enctype="multipart/form-data">
              @csrf
                <div class="card-body">
                  <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Semester ID</label>
                        <input type="text" name="semester_id" value="{{$sem->id}}" readonly class="form-control" id="exampleInputEmail1">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Semester Name</label>
                        <input type="text" name="semester_name" value="{{$sem->semester_name}}" class="form-control" id="exampleInputEmail1" placeholder="Semester">
                    </div>

                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>

@endsection