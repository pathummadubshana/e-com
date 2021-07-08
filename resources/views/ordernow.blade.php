@extends('master')
@section('content')
    <div class='custem-product'>
   <div class='col-sm-10'>
   <table class="table table-striped">
    <tbody>
      <tr>
        <td>Amount</td>
        <td>Rs {{$total}}</td>
      </tr>
      <tr>
        <td>Tax</td>
        <td>Rs 0</td>
      </tr>
      <tr>
        <td>Delivery</td>
        <td>Rs:100</td>
      </tr>
      <tr>
        <td>Total Amount</td>
        <td>{{$total+10}}</td>
    
      </tr>
    </tbody>
  </table>
  <div>
  <form action="/oderplace" method='POST'>
  @csrf
  <div class="form-group">
    <textarea name='address' placeholder='enter your address' class="form-control"></textarea>
  </div>
  <div class="form-group">
    <label for="pwd">Payment Method</label><br><br>
    <input type="radio" value='cash' name='payment'> <span>online payment</span><br><br>
    <input type="radio" value='cash' name='payment'> <span>EMI Payment</span><br><br>
    <input type="radio" value='cash' name='payment'> <span>Payment on Delivary</span><br><br>
  </div>
  <button type="submit" class="btn btn-default">Order Now</button>
</form>

  
  </div>
    </div>
    </div>
     
@endsection
