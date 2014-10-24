@extends('master')
 
@section('title') Login @stop
 
@section('content')
<div>
  <div   class="come" style=" width:40% height:600px; :margin:40px auto;float:left;">
 
<div class='col-lg-4 col-lg-offset-4'>
 
    @if ($errors->has())
        @foreach ($errors->all() as $error)
            <div class='bg-danger alert'>{{ $error }}</div>
        @endforeach
    @endif
 
    <h1><i class='fa fa-lock'></i>Admin Login</h1>
 
    {{ Form::open(['role' => 'form']) }}
 
    <div class='form-group'>
        {{ Form::label('username', 'Username') }}
        {{ Form::text('username', null, ['placeholder' => 'Username', 'class' => 'form-control']) }}
    </div>
 
    <div class='form-group'>
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control']) }}
    </div>
 
    <div class='form-group'>
        {{ Form::submit('Login', ['class' => 'btn btn-primary']) }}
    </div>
  
    {{ Form::close() }}
 </div></div>
   
     <div class="come" style=" width:40% height:600px;float:left;"
   
 
  <div class='col-lg-4 col-lg-offset-4'>
       <H1></H1>

       <img src="http://blog.wmiafrica.org/wp-content/uploads/2013/09/9662943066_4269a28a2b_z.jpg" width="80%px" height="50%px" >
         <br>
         Have an Account <a href="/login">Login</a> Or Simply <a href="/signup">
         SignUp</a> to Explore
  
      </div>
      </div>
      <h1>
      <br>
      E-botics, Creating a generation that thinks not that follows</h1>
      </div>
      
   
    
    
 
@stop