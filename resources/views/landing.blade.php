@extends('layouts.app')

@section('sidebar')
{{-- Ah ti no te sale, callate!! >:c --}}
@endsection

        @section('content')
        <style>
        form {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%); /* IE 9 */
    -webkit-transform: translate(-50%, -50%); /* Chrome, Safari, Opera */	    
}
        </style>
        <div class="menu">
  <ul class="mainmenu clearfix">
    <li class="menuitem">Well</li>
    <li class="menuitem">how</li>
    <li class="menuitem">about</li>
    <li class="menuitem">that?</li>
  </ul>
</div>
<div style="text-align: center;">
<h1 style="font-size: 200px;font-style: italic;color: white;margin-top: 65px; font-family: BreatheFire;">Initiative</h1>
</div>
<div class="form" style="margin-top: 120px;">
 
  <div class="forceColor"></div>
<a href="{{ url('login') }}">Login</a>
</div>
<p class="text-center" style="color:#ececec;margin-top: 340px;">Don't have an account? <a href="{{ url('register') }}">Register</a> </p>   
        @endsection 