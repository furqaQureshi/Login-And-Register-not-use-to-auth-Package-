@extends('layout.master')
@section('navigation')
    
<h1>
    Home : {{ Auth::user()->name }}
</h1>
@endsection