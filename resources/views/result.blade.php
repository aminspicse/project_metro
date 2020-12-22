@extends('landlayout')

@section('content')

    <div class="row">
        <div class="col-md-6 offset-3">
        
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Fatch Student Result</h3>
                </div>
                <div class="card-body">
                    <div>
                        <form action="" method="get">
                            <div class="form-group">
                                <input type="text" name="roll" class="form-control">
                            </div>
                            <button class="btn btn-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-md-3">
                        Roll: {{$std->roll}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection