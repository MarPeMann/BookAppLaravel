@extends('layouts.master')


@section('content')

<div class="jumbotron">
  <form class="form-login" method="post" action="{{route('login')}}">
    <h3>Login</h3>
    <input class="form-control" type="text" placeholder="Your username" id="name" name="name">

    <input class="form-control" type="password" placeholder="Your password" id="password" name="password">
    <input type="submit" class="btn btn-lg btn-primary btn-block" role="button" value="Sign in">

    <input type="hidden" name="_token" value="{{ Session::token() }}">

  </form>
</div>

@endsection
