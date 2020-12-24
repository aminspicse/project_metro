@extends('admin.layout')

@section('content')

<div class="card card-primary">
              
              <form role="form" action="{{asset('/class/store')}}" method="post" enctype="multipart/form-data">
              @csrf
                <div class="card-body">
                  <div class="row">
                  
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Class Name</label>
                        <input type="text" name="class_name" class="form-control" id="exampleInputEmail1" placeholder="Class">
                    </div>

                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Create</button>
                </div>
              </form>
            </div>

@endsection