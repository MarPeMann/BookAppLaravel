@extends('layouts.master')


@section('content')

<div class="jumbotron" id="welcome">
      <form class="form-welcome" method="post" action="/login">
        <h3>Sign in or create yourself a user account</h3>

        <a href="{{route('login')}}" class="btn btn-default btn-lg btn-block">Sign in</a>
        <a href="{{route('signup')}}" class="btn btn-success btn-lg btn-block">Sign up</a>

      </form>
    </div>




@endsection
