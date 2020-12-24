@extends('admin.layout')

@section('content')

<div class="card card-primary">
              
            <form role="form" action="{{asset('/result/store')}}" method="post">
              @csrf
                <div class="card-body">
                  <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Roll</label>
                        <input type="text" name="roll" class="form-control" id="exampleInputEmail1" placeholder="Roll Number">
                    </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="">Class</label>
                            <select name="class" id="" class="form-control">
                                @foreach($class as $cls)
                                  <option value="{{$cls->id}}">{{$cls->class_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Select Semester</label>
                        <select name="semester" id="" class="form-control">
                            @foreach($semester as $sem)
                                <option value="{{$sem->id}}">{{$sem->semester_name}}</option>
                            @endforeach
                        </select>
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Select Year</label>
                        <input type="text" name="year" class="form-control" id="exampleInputEmail1" placeholder="Year">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputtext1">Mark</label>
                        <input type="text" name="mark" class="form-control" id="exampleInputtext1" placeholder="Mark">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>

@endsection