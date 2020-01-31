   <link rel="stylesheet" type="text/css" href="css/sidenav.css">
   <body style="background-image:url('img/3.jpg');background-repeat: repeat;background-size: 100% 100vh;">
@extends('layouts.app')

@section('content')
<div class="sidenav">
    <br>
    <br>
  <a href="#">Price</a>
  <a href="#">Company Name</a>
  <a href="#">Battery</a>
  <a href="#">Ratings</a>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card-deck">
                @foreach($data as $item)
                <div>
                    <form action="showproduct" method="post" class="card" style="padding:20px;margin:10px;width: 15rem;">
                    @csrf
                        <input style="display:none;" class="card-text" name="itemid" value="{{ $item->id}}"></input>
                        <img src="storage/app/public/{{$item->imagename}}" class="card-img-top" alt="...">
                        {{ $item->name}}  <br>
                        {{ $item->description}}  
                        {{$item->imagename}}        
                        <div class="card-footer">
                            <center><input type="submit" value="Buy NOW!"></center>
                        </div>
                    </form>
                </div>
                @endforeach  
            </div>
        </div>
    </div>
</div>

<div style="margin-left:600px" class="page-item">
{{$data->links()}}
</div>



@endsection
</body>