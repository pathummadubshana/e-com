@extends('master')
@section('content')
    <div class='custem-product'>
   <div class='col-sm-4'>
   <a href="#">Filter</a>
   </div>
   <div class='col-sm-4'>
   <div class='trending-wrapper'>
    <h2>Result for Products</h2>
    @foreach($products as $item)
    <div class='search-item'>
    <a href="detail/{{$item['id']}}">
      <img class='trending-imge' src="{{$item['gallery']}}" >
      <div class="">
        <h2>{{$item['name']}}</h2>
        <h5>{{$item['discription']}}</h5>
      </div>
      </a>
    </div>
    @endforeach
   
   </div>

    </div>
     
@endsection
