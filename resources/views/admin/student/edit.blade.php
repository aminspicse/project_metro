@extends('admin.layout')

@section('content')

<div class="card card-primary">
              
              <form role="form" action="{{asset('/student/update')}}/{{$std->id}}" method="post" enctype="multipart/form-data">
              @csrf
                <div class="card-body">
                  <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Roll</label>
                        <input type="text" name="roll" value="{{$std->roll}}" readonly class="form-control" id="exampleInputEmail1" placeholder="Roll Number">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleInputtext1">Name</label>
                        <input type="text" name="name" value="{{$std->name}}" class="form-control" id="exampleInputtext1" placeholder="Student Name">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Fathers Name</label>
                        <input type="text" name="fname" value="{{$std->fname}}" class="form-control" id="exampleInputEmail1" placeholder="Fathers Name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleInputtext1">Mothers Name</label>
                        <input type="text" name="mname" value="{{$std->mname}}" class="form-control" id="exampleInputtext1" placeholder="Mothers Name">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Mobile</label>
                        <input type="text" name="mobile" value="{{$std->mobile}}" class="form-control" id="exampleInputEmail1" placeholder="Mobile">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleInputtext1">Email</label>
                        <input type="text" name="email" value="{{$std->email}}" class="form-control" id="exampleInputtext1" placeholder="Student Name">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Present Address</label>
                        <textarea name="present_address" value="{{$std->present_address}}"  class="form-control" id="" cols="30" rows="1">{{$std->present_address}}
                        </textarea>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleInputtext1">Permanent Address</label>
                        <textarea name="permanent_address" class="form-control" id="" cols="30" rows="1">{{$std->permanent_address}}
                        </textarea>
                    </div>
                  </div
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>

@endsection