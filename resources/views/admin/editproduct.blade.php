@extends('admin.include')
@section('dashboard')
<div class="container">
<div class="row">
  <div class="col-6 mx-auto">
    <div class="card">
      <div class="card-body">
      @if(session()->has('success'))
         <div class="alert alert-success">
          {{session()->get('success')}}
         </div>
         @endif
        @if(session()->has('erorr'));
         <div class="alert alert-danger">
          {{session()->get('error')}}
         </div>
         @endif
        <h2 class="text-center test-bold">Edit Product</h2>
        @if (!empty($product))
      <form action="{{route('updateproduct')}}" method="POST">
        @csrf
        <input type="hidden" name="pid" value="{{$product->id}}">
      <div class="mb-3">
        <label for="Pname" class="form-label test-bold">Product Name</label>
        <input type="text" class="form-control" name="Pname" value="{{$product->Pname}}" id="Pname" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="Pquality" class="form-label test-bold">Product Quality</label>
        <select class="form-select" name="Pquality" aria-label="Default select example">
          <option selected>{{$product->Pquality}}</option>
          <option >Best</option>
          <option >Mediam</option>
          <option >Law</option>
        </select>
        
      </div>
      <div class="mb-3">
        <label for="Quantity" class="form-label test-bold">Quantity</label>
        <input type="text" class="form-control" name="pquantity" value="{{$product->pquantity}}"  id="Quantity" aria-describedby="emailHelp">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @else
    <div class="alert alert-info">sorry No data found</div>
    @endif
      </div>
    </div>
  </div>
</div>
</div>
@endsection