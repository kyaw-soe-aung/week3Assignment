@extends('bookshop.layout')

@section('content')
<div class="container">
  <div class="row">
    
      @foreach ($books as $book)
      <div class="col">
        <div class="card" style="width: 20rem;margin-left:20px;margin-bottom:20px;">
          <a href="/bookshop/{{ $book->id }}">
            <img src="storage/images/{{ $book->image }}" class="card-img-top" alt="..." style="height:260px;">
          </a>
          <div class="card-body">
          <a href="/bookshop/{{ $book->id }}"> <p class="card-text">{{ $book->title }}</p></a>
          </div>
          <div class="text-center" style="padding-left:20px;">
              <p class="card-text"><span style="color:green;font-weight:bold;">Type: </span> {{ $book->type }}</p>          </div>
            </div>
      </div>
      @endforeach
    
  </div>
</div>
  
{!! $books->links() !!}
@endsection