@extends('layout')

@section('content')

<div class="row" style="margin-top: 50px;">
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <span class="big">User Login</span>
            </div>
            <div class="panel-body">
                {{Form::open(['method'=>'post', 'url'=>'/login'])}}

                <div class="form-group">
                    {{Form::label('username')}}
                    {{Form::text('username',null,['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::label('password')}}
                    {{Form::password('password',['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                    <button class="btn btn-primary pull-right">Login</button>
                </div>

                {{Form::close()}}
            </div>
        </div>
    </div>
</div>

@stop
