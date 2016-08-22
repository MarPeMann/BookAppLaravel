@extends('layouts.master')

@section('content')
<div class="jumbotron">
  <form class="form-login" method="post" action="{{route('signup')}}">
    <h3>Fill in your details</h3>

    <div class="form-group" {{$errors->has('username') ? ' has-error' : ''}}>
      <input class="form-control" type="text" placeholder="Your username"
       id="name" name="name" value="{{ Request::old('name') }}">
      @if($errors->has('name'))
          <span class="help-block">{{ $errors->first('name') }}</span>
      @endif
    </div>

    <div class="form-group" {{$errors->has('password') ? ' has-error' : ''}}>
      <input class="form-control" type="password" placeholder="Your password"
       id="password" name="password">
      @if($errors->has('password'))
          <span class="help-block">{{ $errors->first('password') }}</span>
      @endif
    </div>

    <div class="form-group" {{$errors->has('email') ? ' has-error' : ''}}>
      <input class="form-control" type="text" placeholder="Your email"
       id="email" name="email" value="{{ Request::old('email') }}">
      @if($errors->has('email'))
          <span class="help-block">{{ $errors->first('email') }}</span>
      @endif
    </div>

    <input type="submit" class="btn btn-lg btn-primary btn-block" role="button" value="Create account">

    <input type="hidden" name="_token" value="{{ Session::token() }}">

    </form>
</div>
@endsection
