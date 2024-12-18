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
        <h2 class="text-center test-bold">Add Product</h2>
      <form action="{{route('saveproduct')}}" method="POST">
        @csrf
      <div class="mb-3">
        <label for="Pname" class="form-label test-bold">Product Name</label>
        <input type="text" class="form-control" name="Pname" id="Pname" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="Pquality" class="form-label test-bold">Product Quality</label>
        <select class="form-select" name="Pquality" aria-label="Default select example">
          <option selected>Quality Selected</option>
          <option >Best</option>
          <option >Mediam</option>
          <option >Law</option>
        </select>
        
      </div>
      <div class="mb-3">
        <label for="Quantity" class="form-label test-bold">Quantity</label>
        <input type="text" class="form-control" name="pquantity" id="Quantity" aria-describedby="emailHelp">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
      </div>
    </div>
  </div>
</div>
</div>
@endsection