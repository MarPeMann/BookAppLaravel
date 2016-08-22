@extends('layouts.master')

@section('content')
<div class="container">
     <form method="post" action="{{route('addbook')}}">
       <div class="row">
         <div class="col-md-6">
           <div class="form-group">
           <input type="text" id="title" name="title" placeholder="Book title" class="form-control" width="50px"/>
           </div>
         </div>
       </div>
       <div class="row">
         <div class="col-md-6">
               <div class="form-group">
               <input type="text" id="author" name="author" placeholder="Book author" class="form-control"/>
               </div>
             </div>
         </div>
         <!-- <div class="row">
           <div class="col-md-6">
               <div class="form-group">
               <input type="text" id="isbn" name="isbn" placeholder="Book isbn" class="form-control"/>
               </div>
           </div>
          </div> -->
         <div class="row">
           <div class="col-md-6">
               <div class="form-group">
                 <label for="description">Share us your thoughts about this book</label>
               <textarea rows="4" id="description" name="description" class="form-control"></textarea>
               </div>
             </div>
         </div>

             <input type="submit" class="btn btn-positive" id="doneBtn" value="Done"/>

             <input type="hidden" name="_token" value="{{ Session::token() }}">

     </form>

   </div>

   @endsection
