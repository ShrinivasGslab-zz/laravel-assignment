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
    Edit & Update
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
      <form method="post" action="{{ route('products.update', $product->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" value="{{ $product->name }}"/>
          </div>

          <div class="form-group">
              <label for="email">Description</label>
              <input type="text" class="form-control" name="description" value="{{ $product->description }}"/>
          </div>

          <div class="form-group">
              <label for="email">sku</label>
              <input type="text" class="form-control" name="sku" value="{{ $product->sku }}"/>
          </div>
          
          <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="status" name="status">
              <option value="">--- Select Status ----</option>
              <option value="inprogress" <?php if($product->status == 'inprogress') { ?> selected="selected"<?php } ?>>inprogress</option>
              <option value="completed" <?php if($product->status == 'completed') { ?> selected="selected"<?php } ?>>completed</option>
              <option value="Available" <?php if($product->status == 'Available') { ?> selected="selected"<?php } ?>>Available</option>
            </select>
          </div>

          <div class="form-group">
              <label for="stock">stock</label>
              <input type="text" class="form-control" name="stock" value="{{ $productdetails->stock }}"/>
          </div>

          <div class="form-group">
            <label for="type">Type</label>
            <select class="form-control" id="type" name="type">
              <option value="">--- Select Type ----</option>
              <option value="Fiber" <?php if($productdetails->type == 'Fiber') { ?> selected="selected"<?php } ?>>Fiber</option>
              <option value="Glass"<?php if($productdetails->type == 'Glass') { ?> selected="selected"<?php } ?>>Glass</option>
              <option value="Plastic" <?php if($productdetails->type == 'Plastic') { ?> selected="selected"<?php } ?>>Plastic</option>
            </select>
          </div>
          <div class="form-group">
            <label for="type">Size</label>
            <select class="form-control" id="size" name="size">
              <option value="">--- Select Size ----</option>
              <option value="Small" <?php if($productdetails->size == 'Small') { ?> selected="selected"<?php } ?>>Small</option>
              <option value="Medium" <?php if($productdetails->size == 'Medium') { ?> selected="selected"<?php } ?>>Medium</option>
              <option value="Large" <?php if($productdetails->size == 'Large') { ?> selected="selected"<?php } ?>>Large</option>
            </select>
          </div>

          <button type="submit" class="btn btn-block btn-danger">Update Product</button>
      </form>
  </div>
</div>
@endsection