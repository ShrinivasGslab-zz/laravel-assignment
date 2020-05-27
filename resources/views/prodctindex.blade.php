@extends('layout')

@section('content')

<style>
  .push-top {
    margin-top: 50px;
  }
</style>

<div class="push-top">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <a class="push-center" href="/products/create">Create New Product</a>
  <table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr class="table-warning">
          <td>Name</td>
          <td>SKU</td>
          <td>Stock</td>
          <td>Type</td>
          <td class="text-center">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($product as $products)
        <tr>
            <td>{{$products->name}}</td>
            <td>{{$products->sku}}</td>
            <td>{{$products->stock}}</td>
            <td>{{$products->type}}</td>
            <td class="text-center">
                <a href="{{ route('products.edit', $products->id)}}" class="btn btn-primary btn-sm"">Edit</a>
                <form action="{{ route('products.destroy', $products->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm"" type="submit">Delete</button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  
<div>
@endsection