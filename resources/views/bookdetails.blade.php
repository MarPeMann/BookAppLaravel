@extends('layouts.master')

@section('content')

<div class="row">
		<div class="col-md-3">
			<img src="http://placehold.it/200" class="img-thumbnail">

		</div>

		<div class="col-md-6">
			<div class="card">
				<h2>{{$book->title}}</h2>
				<h4>{{$book->author}}</h4>
			</div>

			<p>{{$book->description}}</p>
      @foreach($user as $usr)
			<small><em>By <a href="{{ route('profile', ['name' => $usr->name])}}">{{$usr->name}}</a></em></small>
			<br/>
			<br/>
			<br/>
      @endforeach
		</div>
		<div class="col-md-3">
			<div class="panel panel-default">
				<div class="panel-heading">Information about <a href="https://en.wikipedia.org/wiki/{{$book->author}}" target="_blank">{{$book->author}}</a></div>
				<div class="panel-body">
					<ul>
						<li>dfghdgf</li>
						<li>dfghdgf</li>
						<li>dfghdgf</li>
						<li>dfghdgf</li>
						<li>dfghdgf</li>
						<li>dfghdgf</li>
						<li>dfghdgf</li>
						<li>dfghdgf</li>
					</ul>
				</div>
    		</div>
		</div>

	</div>

  @endsection
