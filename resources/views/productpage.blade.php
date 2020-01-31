<body style="background-image:url('img/3.jpg');background-repeat: repeat;background-size: 100% 100vh;">
@extends('layouts.app')

@section('content')

@foreach($item as $product)
<li>{{$product->id}}</li>
<li>{{$product->name}}</li>
<li>{{$product->price}}</li>
<li>{{$product->description}}</li>
@endforeach
@endsection
</body>