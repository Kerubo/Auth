@extends('master')
@section('content')x
<h2>Create Account</h2>
  
  {{Form::open(['action' => 'AuthController@signup'])}}
  <div class="form-group">
    {{Form::text('username')}}
  </div>
  <div class="form-group">
    {{Form::password('password')}}
  </div>
  <div class="form-group">
    {{Form::submit('Create Account', ['class' => 'btn btn-success'])}}
  </div>
  {{Form::close()}}
@stop
