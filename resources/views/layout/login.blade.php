@extends('layout.master')

@section('navigation')
    <form method="post" action="{{ url('/login') }}">
      @csrf
            <div class="container w-50">
              <h1>Login Form</h1>
              <div class="form-group">
                  @if (Session::has('error'))
                        <p class="alert-danger">{{ Session::get('error') }}</p>
                  @endif
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control" placeholder="User Email">
                  </div>
                  <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="User Password">
                  </div>
                  <button class="btn btn-info">Login</button>
            </div>
    </form>
@endsection