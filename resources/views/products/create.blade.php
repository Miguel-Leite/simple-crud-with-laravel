@extends('layouts.app')

@section('title', 'Create')

@section('content')

<div class="col-6">
    <h1>Create Products</h1>
    <form action="{{ route('products.store') }}" method="post" class="form-group">

        @csrf

        <div class="form-group">
          <label for="title">Title: </label>
          <input type="text" name="title" id="title" class="form-control" placeholder="Enter title">
        </div>

        <div class="form-group">
          <label for="country">Country</label>
          <input type="text" name="country" id="country" class="form-control" placeholder="Enter country">
        </div>

        <div class="form-group">
          <label for="price">Price: </label>
          <input type="text" name="price" id="price" class="form-control" placeholder="Enter price">
        </div>

        <div class="form-group my-2">
          <button type="submit" class="btn btn-primary col-sm-12">Create product</button>
        </div>
    </form>

</div>

@endsection