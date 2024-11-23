@extends('admin.include')
@section('dashboard')
<div class="container">
<div class="row">
  <div class="col-12 mx-auto">
    <div class="card">
      <div class="card-body">
     
      <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product Name</th>
      <th scope="col">Quality</th>
      <th scope="col">Quantity</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
    @php
    $x=1;
    @endphp
  @foreach($product as $data)
<tr>
    <th>{{ $x }}</th>
    <th>{{ $data->Pname}}</th>
    <th>{{ $data->Pquality}}</th>
    <th>{{ $data->pquantity}}</th>
    <th> <a href="{{route('editproduct',['id' => $data->id]) }}">Edit </a></th>
</tr>
@php
$x++;
@endphp
@endforeach
    </tbody>
</table>
             </div>
          </div>
       </div>
    </div>
</div>
@endsection