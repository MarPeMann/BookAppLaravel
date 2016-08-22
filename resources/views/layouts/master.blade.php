<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    {{Html::style('css/styles.css')}}
  </head>
  <body>
    <nav class="navbar navbar-inverse">
  <div class="container"> <!-- container-fluid -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/#/">Bread a Rook</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li><a href="/">Home</a></li>
        <li><a href="{{route('booklist')}}">Books</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        @if(Auth::check())
            <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-weight:bolder; text-transform: capitalize; color:white;">{{Auth::user()->name}} <span class="caret"></span></a>
               <ul class="dropdown-menu">
                    <li><a href="{{route('addbook')}}">Add books</a></li>
                    <li><a href="{{route('profile', ['name' => Auth::user()->name])}}">My Profile Page</a></li>
                    <li role="separator" class="divider"></li>
                <!-- <li class="dropdown-header">Nav header</li> -->
                    <li><a href="{{route('logout')}}">Logout</a></li>
                </ul> <!-- dropdown-menu -->
            </li> <!--dropdown -->
        @else
                <a href="{{route('login')}}" class="btn btn-default navbar-btn">Login</a>
                <a href="{{route('signup')}}" class="btn btn-success navbar-btn">Signup</a>
        @endif



      </ul> <!-- navbar-right -->

    </div>
  </div>
</nav>

@yield('content')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  </body>
</html>
