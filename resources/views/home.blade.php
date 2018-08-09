  @extends('layouts.main')


  @section('content')
  <div class="container">

  	<div class="row">
  		<div class="col-lg-4">
  			@include('layouts.cat')
  		</div>
  		<div class="col-lg-6">
      <h1 style="text-align: center; color:cyan">Товары</h1>
      @if(count($products)===1)
         
      @else
      <ul class="bbaka">
      @foreach($products as $product)
          <li class="baka" style="background-color:#F5F5F5"><a class="name" href="/contentTovar/{{$product->id}}/">{{ $product->name }}</a>
          <div class="price" style="float:right">{{ $product->price }}<span> тг.</span></div>
          </li>
      @endforeach
      </ul>
      @endif
  	    </div>
      <div class="search col-lg-2" style="padding-top:15px">
        <h5 style="color:green">Опции</h5>
        <label for="txt">Поиск</label>
        <input type="text" id="txt" name="txt" style="margin-bottom: 16px">
        <label style="width:100%;">Сортировать</label>
        <a href="#" id="abc">По алфавиту</a> /
        <a href="#" id="price">По цене</a>
      </div>
      
  	</div>
  		 
  </div>

  @endsection


<script>
  window.onload=function(){
  document.getElementById('txt').addEventListener('keyup',function(e){
       const text = e.target.value.toLowerCase();
       var a = document.getElementsByClassName('name');
       for(var i=0; i<a.length; i++){
        if(a[i].innerHTML.toLowerCase().indexOf(text)!=-1){
        a[i].parentElement.style.display="block";
         }
        else
          {
      a[i].parentElement.style.display='none';
          } 
       }
    
  });

  var link = window.location.toString();

  var linkSlice = parseInt(link.slice(link.length-1));

  if(typeof linkSlice=="number"){
  document.getElementById('abc').href='/sortABC/'+linkSlice;
  document.getElementById('price').href='/sortPrice/'+linkSlice;

  }


}

  
</script>