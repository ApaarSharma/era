<body style="background:url('img/3.jpg');background-repeat: no-repeat;background-size: 100% 100vh;">
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card-deck">
@if($count!=0)
                
                    <table border=1 cellpadding=10px style="box-shadow:0px 0px 8px 3px red;margin-left:auto; 
                    margin-right:auto;color:white">
                        <thead >
                            <tr>
                                <th>Product Name</th>
                                <th>Product Type</th>
                                <th>Product Price</th>
                                <th>Product Description</th>
                                <th>LINK</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($allsell as $item)
                            <tr>
                                <td>{{ $item->name}}  </td>
                                <td>{{ $item->type}} </td>
                                <td>{{ $item->price}} </td>
                                <td>{{ $item->description}} </td>
                                <td><form action="showproduct" method="post" >
                                @csrf
            <input style="display:none;" class="card-text" name="itemid" value="{{ $item->id}}"></input>
            <input type="submit" value="Buy NOW!">
                                </form>
                                </td>
                            </tr>
                            @endforeach 
                        </tbody>
                    </table>
                
@else
                <div style="color:red"><strong>NO DATA FOUND</strong> </div>
@endif
            </div>

        </div>
    </div>
</div>



@endsection
</body>