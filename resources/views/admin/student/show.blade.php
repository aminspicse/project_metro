@extends('admin.layout')

@section('content')

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6"><h3>Student Info Details</h3></div>
                <div class="col-md-6"><h3><a href="{{asset('student')}}">Back</a></h3></div>
            </div>
        </div>

        <div class="card-body">
            <table class="table">
                <tr>
                    <th class="th1">Roll</th>
                    <th class="th2">:</th>
                    <td>{{$std->roll}}</td>
                    <th class="th1">Name</th>
                    <th class="th2">:</th>
                    <td>{{$std->name}}</td>
                </tr>

                <tr>
                    <th class="th1">Father Name</th>
                    <th class="th2">:</th>
                    <td>{{$std->fname}}</td>
                    <th class="th1">Mother Name</th>
                    <th class="th2">:</th>
                    <td>{{$std->mname}}</td>
                </tr>

                <tr>
                    <th class="th1">Mobile</th>
                    <th class="th2">:</th>
                    <td>{{$std->mobile}}</td>
                    <th class="th1">Email</th>
                    <th class="th2">:</th>
                    <td>{{$std->email}}</td>
                </tr>

                <tr>
                    <th class="th1">Present Address</th>
                    <th class="th2">:</th>
                    <td>{{$std->present_address}}</td>
                    <th class="th1">Permanent Address</th>
                    <th class="th2">:</th>
                    <td>{{$std->permanent_address}}</td>
                </tr>
                <tr>
                    <th class="th1">Roll</th>
                    <th class="th2">:</th>
                    <td>
                    <img src="{{asset($std->photo)}}" width="100px" alt="">
                    </td>
                    
                </tr>
            </table>
        </div>
    </div>

    <style>
        .th1{
            width: 170px
        }
        .th2{
            width:20px
        }
    </style>
@endsection