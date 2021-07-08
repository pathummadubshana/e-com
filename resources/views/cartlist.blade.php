@extends('master')
@section('content')
    <div class='custem-product'>
   <div class='col-sm-10'>
   <div class='trending-wrapper'>
    <h2>Result for Products</h2>
    @foreach($products as $item)
    <div class='row search-item cart-list-divider'>
    <div class='col-sm-3'>
    <a href="detail/{{$item->id}}">
      <img class='trending-imge' src="{{$item->gallery}}" >
    
      </a>
    
    </div>
    <div class='col-sm-3'>
      <div class="">
        <h2>{{$item->name}}</h2>
        <h5>{{$item->discription}}</h5>
      </div>
    </div>
    <div class='col-sm-4'>
    <button class='btn btn-warning'>Remove from Cart</button>
    
    </div>
    </div>
    @endforeach
   
   </div>

    </div>
     
@endsection
