@extends('layouts.app')

@section('title', $title)

 @section('subtitle', $subtitle) 

 @section('content')

 <div class="container">
     <div class="row"> 
        <div class="col-lg-6 mx-auto text-center">
             <p class="lead">Name: {{ $name }}</p> 
             <p class="lead">Address: {{ $address }}</p> 
             <p class="lead">Phone: {{ $phone }}</p>
             </div> 
            </div>
         </div>
          @endsection