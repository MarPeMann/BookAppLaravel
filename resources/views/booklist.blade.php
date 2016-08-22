@extends('layouts.master')

@section('content')
<div class="container">
  <div class="row">
    <h3>Books read recently</h3>
    <div class="list-group">
      @foreach($books as $book)
        <a href="{{ route('bookdetails', ['id' => $book->id]) }}" class="list-group-item col-md-12 col-sm-12 col-xs-12">
          <h4 class="list-group-item-heading">{{$book->title}}</h4>
          <p class="list-group-item-text">{{$book->author}}</p>
        </a>
      @endforeach
      </div>

    </div>
  </div>

  @endsection
