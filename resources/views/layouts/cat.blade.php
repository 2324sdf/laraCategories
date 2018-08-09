	<div class="h1" style="color:violet">Категории</div>
    <ul class="list-group">
    @foreach($categories as $cat)
      <li class="list-group-item"><a href="/displayTovar/{{$cat->id}}">{{ $cat->name }}</a></li>
    @endforeach
    </ul>