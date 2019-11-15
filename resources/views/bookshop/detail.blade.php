@extends('bookshop.layout') 
@section('content')
    <a href="" class="btn btn-success">Add New Log</a>
    <a href="/bookshop" class="btn btn-warning">Back</a>
    <div class="float-right">

    </div>

    <div class="container-fluid">
        <div class="text-center">
            <img src="/storage/images/{{ $detail->image }}" class="img-fluid" alt="..." style="width:400px;height;200px;">
        </div>
        {{-- <img src="..."  alt="..."> --}}

        <div class="text-center">
          <p><span style="color:blue;font-weight:bold;">Title: </span>{{ $detail->title }}</p>
          <p><span style="color:blue;font-weight:bold;">category: </span> {{ $detail->category }}</p> 
          <p><span style="color:green;font-weight:bold;">Type: </span> {{ $detail->type }}</p>          
          <p><span style="color:green;font-weight:bold;">Price: $ </span>{{ $detail->price }}</p>
        </div>

    </div>
     
        
    </div>
    
@endsection