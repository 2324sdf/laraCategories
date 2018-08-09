@extends('layouts.main')


  @section('content')

  <div class="container">
  	<div class="row">
  		<div class="col-lg-4">
  			@include('layouts.cat')
  		</div>
  		<div class="col-lg-8">
      <h1 style="text-align: center; color:cyan">Товар</h1>
        <div style="padding:15px"><h2 style="text-align:center">{{ $products->name }}</h2></div>
        <div style="text-align: center; padding:15px"><img src="{{asset('images/')}}/{{ $products->image }}"></div>
        <div style="padding:15px"><h4 style="text-align:center">{{ $products->description }}</h4></div>
  	 </div>
  	</div>
  		 
  </div>

  @endsection