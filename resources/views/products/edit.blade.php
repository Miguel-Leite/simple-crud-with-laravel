@extends('layouts.app')

@section('title', 'Update')

@section('content')

<div class="col-6">
    <h1>Update Product - {{ $product->id }}</h1>
    <form action="{{ route('products.update', $product->id) }}" method="post" class="form-group">

        @csrf
        @method('put')
        <div class="form-group">
          <label for="title">Title: </label>
          <input type="text" name="title" id="title" value="{{ $product->title }}" class="form-control" placeholder="Enter title">
        </div>

        <div class="form-group">
          <label for="country">Country</label>
          <input type="text" name="country" id="country" value="{{ $product->country }}" class="form-control" placeholder="Enter country">
        </div>

        <div class="form-group">
          <label for="price">Price: </label>
          <input type="text" name="price" id="price" value="{{ $product->price }}" class="form-control" placeholder="Enter price">
        </div>

        <div class="form-group my-2">
          <button type="submit" class="btn btn-success col-sm-12">Send</button>
        </div>
    </form>

</div>

@endsection