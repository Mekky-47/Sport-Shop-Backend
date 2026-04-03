@extends('layouts.app')
@section('content')

<div class="text-center">
    <h3>{{$product->title}}</h3>
    <h1>{{ $product->auther }}</h1>

</div>

@endsection