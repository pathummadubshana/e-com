@extends('master')
@section('content')
    <div class='custem-product'>
   <div class='col-sm-10'>
   <div class='trending-wrapper'>
    <h2>My Orders</h2>
    
    @foreach($orders as $item)
    <div class='row search-item cart-list-divider'>
    <div class='col-sm-3'>
    <a href="detail/{{$item->id}}">
      <img class='trending-imge' src="{{$item->gallery}}" >
    
      </a>
    
    </div>
    <div class='col-sm-4'>
      <div class="">
        <h2>Name: {{$item->name}}</h2>
        <h5>Dilivery Status :{{$item->status}}</h5>
        <h5>Address: {{$item->address}}</h5>
        <h5>Payment Status :{{$item->payment_status}}</h5>
        <h5>Payment method :{{$item->payment_method}}</h5>
      </div>
    </div>
    
    
   
    
    </div>
    </div>
    @endforeach
   
  <div></div>
     
@endsection
