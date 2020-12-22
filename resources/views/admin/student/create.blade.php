@extends('admin.layout')

@section('content')

<div class="card card-primary">
              
              <form role="form" action="{{asset('/student/store')}}" method="post" enctype="multipart/form-data">
              @csrf
                <div class="card-body">
                  <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Roll</label>
                        <input type="text" name="roll" class="form-control" id="exampleInputEmail1" placeholder="Roll Number">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleInputtext1">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputtext1" placeholder="Student Name">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Fathers Name</label>
                        <input type="text" name="fname" class="form-control" id="exampleInputEmail1" placeholder="Fathers Name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleInputtext1">Mothers Name</label>
                        <input type="text" name="mname" class="form-control" id="exampleInputtext1" placeholder="Mothers Name">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Mobile</label>
                        <input type="text" name="mobile" class="form-control" id="exampleInputEmail1" placeholder="Mobile">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleInputtext1">Email</label>
                        <input type="text" name="email" class="form-control" id="exampleInputtext1" placeholder="Student Name">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Present Address</label>
                        <textarea name="present_address"  class="form-control" id="" cols="30" rows="1"></textarea>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleInputtext1">Permanent Address</label>
                        <textarea name="permanent_address" class="form-control" id="" cols="30" rows="1"></textarea>
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="file" class="form-control" id="exampleInputFile">
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>

@endsection