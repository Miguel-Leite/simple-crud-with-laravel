@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Country</th>
            <th scope="col">Price</th>
            <th scope="col">Created</th>
            <th scope="col">Updated</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($products as $row)      
                <tr>
                    <th scope="row"> {{ $row->id }} </th>
                    <td>{{ $row->title }}</td>
                    <td>{{ $row->country }}</td>
                    <td>{{ $row->price }}</td>
                    <td>{{ $row->created_at }}</td>
                    <td>{{ $row->updated_at }}</td>
                    <td>
                        <a href="{{ route('products.destroy', $row->id) }}" class="btn btn-danger">
                            <ion-icon name="trash-outline"></ion-icon>
                        </a>
                        <a href="{{ route('products.edit', $row->id) }}" class="btn btn-success">
                            <ion-icon name="pencil-outline"></ion-icon>
                        </a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>

@endsection