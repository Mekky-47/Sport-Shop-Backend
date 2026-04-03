@extends('layouts.app')
@section('content')


<div class="container w-50">
    
    <h1>Products List</h1>
    <table class="table table-bordered">
        <thead class="table-light text-center bg-light">
            <tr class="text-center">
                <th>ID</th>
                <th>Title</th>
                <th>Author</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach ($products as $product)
            <tr class="text-center">
                <td>{{ $product->id }}</td>
                <td>{{ $product->title }}</td>
                <td>{{ $product->auther }}</td>
                <td>
                    <a class="btn btn-primary" href="{{ route('products.show',$product->id) }}">View</a>
                    <a class="btn btn-info" href="{{ route('products.update',$product->id) }}">Update</a>
                    <a class="btn btn-danger" href="{{ route('products.destroy',$product->id) }}">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection