@extends('layout')

@section('content')

<style>
    .container {
      max-width: 450px;
    }
    .push-top {
      margin-top: 50px;
    }
</style>

<div class="card push-top">
  <div class="card-header">
    Add Product
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('products.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="email">Description</label>
              <input type="text" class="form-control" name="description"/>
          </div>
          <div class="form-group">
              <label for="phone">SKU</label>
              <input type="text" class="form-control" name="sku"/>
          </div>
          <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="status" name="status">
              <option value="">--- Select Status ----</option>
              <option value="inprogress">inprogress</option>
              <option value="completed">completed</option>
              <option value="Available">Available</option>
            </select>
          </div>

          <div class="form-group">
              <label for="stock">stock</label>
              <input type="text" class="form-control" name="stock"/>
          </div>

          <div class="form-group">
            <label for="type">Type</label>
            <select class="form-control" id="type" name="type">
              <option value="">--- Select Type ----</option>
              <option value="Fiber">Fiber</option>
              <option value="Glass">Glass</option>
              <option value="Plastic">Plastic</option>
            </select>
          </div>
          <div class="form-group">
            <label for="type">Size</label>
            <select class="form-control" id="size" name="size">
              <option value="">--- Select Size ----</option>
              <option value="Small">Small</option>
              <option value="Medium">Medium</option>
              <option value="Large">Large</option>
            </select>
          </div>

          <button type="submit" class="btn btn-block btn-danger">Create Product</button>
      </form>
  </div>
</div>
@endsection