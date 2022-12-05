 
@extends('layouts.default')
 @section('title', 'Login Page') 
  
 
@section('content')
@if (session()->has('error'))
{{ session('error') }}
@elseif (session()->has('success'))
{{ session('success') }}
@endif
@if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif 
<div style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
    <h2 style="font-weight: 500;">Express Union</h2>
  <p>Login to your bank</p>
    
</div>
<form class="login-form" action="/auth/login" method="post">
  @csrf
  <div class="login-wrap">
    <p class="login-img"><i class="icon_lock_alt"></i></p>
    <div class="input-group">
      <span class="input-group-addon"><i class="icon_profile"></i></span>
      <input type="text" name="email" class="form-control" placeholder="Enter Account Email Address" autofocus>
    </div>
    <div class="input-group">
      <span class="input-group-addon"><i class="icon_key_alt"></i></span>
      <input type="password" name="password" class="form-control" placeholder="Password">
    </div>
    <label class="checkbox">
      <input type="checkbox" name="remember_me" value="on"> Remember me
      <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
    </label>
    <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
    {{-- <button class="btn btn-info btn-lg btn-block" type="submit">Signup</button> --}}
  </div>
</form> 

</div> 
@endsection