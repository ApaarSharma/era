<link rel="stylesheet" type="text/css" href="css/sidenav.css">
<style>
/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance:textfield;
}
</style>
<body style="background:url('img/3.jpg');background-repeat: no-repeat;background-size: 100% 100vh;">
@extends('layouts.app')

@section('content')
<div class="row justify-content-center" style="margin:0px">
<form action="products" method="post"  style="box-shadow:0px 0px 8px 1px red" enctype="multipart/form-data">
<h1 style="color:cyan">{{Session::get('savedata')}}</h1>
@csrf
    <table style=""  cellspacing=10px cellpadding=10px>
        <tr>
            <td><label>Product Name</label></td>
            <td><input type="text" name="name">
            <p style="color:red">@error('name'){{$message}}@enderror</p>
            </td>
        </tr>
        <tr>
            <td><label>Product Type</label></td>
            <td><select name="type">
                    <option value="">-- Select Option --</option>
                    <option value="electronics">Electronics</option>
                    <option value="communication">Communication</option>
                </select>
            <p style="color:red">@error('type'){{$message}}@enderror</p>
            </td>
        </tr>
        <tr>
            <td><label>Price</label></td>
            <td>&#x20B9;<input type="number" name="price">
            <p style="color:red">@error('price'){{$message}}@enderror</p>
            </td>
        </tr>
        <tr>
            <td><label>Description</label></td>
            <td><textarea name="description" style="resize: none;"></textarea>
            <p style="color:red">@error('description'){{$message}}@enderror</p>
            </td>
        </tr>
        <tr>
            <td><label>Product Image</label></td>
            <td><input type="file" name="productimage"></td>
        </tr>
        <tr>
                    <td><input type="submit" value="Register NOW" class="submit"></td>
                </tr> 
    </table>
</form>
</div>
@endsection