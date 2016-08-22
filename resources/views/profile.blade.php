@extends('layouts.master')

@section('content')

<div class="container">
    	<div class="row">
    		<div class="col-md-3">
    				<!-- <h2>{{Auth::check() ? Auth::user()->name : ''}}</h2> -->
            <h2>{{$user->name}}</h2>
            <ul class="nav nav-pills nav-stacked">
              <li class="active" role="presentation"><a href="">My books</a></li>
              <li role="presentation"><a href="">Messages</a></li>
              <li role="presentation"><a href="">Settings</a></li>
            </ul>
    		</div>

        <div class="col-md-5">
          <h2>My Books</h2>
          @foreach($books as $book)
              <div class="well">
                <h5><b>{{ $book->title }}</b></h5>
                <img class="img-thumbnail" style="display:inline; float:right; margin-top:0;" src="{{ $book->picture }}" width=90px height=90px alt="cover" />
                <h6 style="display:inline">{{ $book->author }}</h6>
                <hr>
                <p>
                  {{ $book->description }}
                </p>

              </div>
          @endforeach
        </div>
    	</div>
    </div>

@endsection
