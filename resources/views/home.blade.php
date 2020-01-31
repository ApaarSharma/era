<link rel="stylesheet" type="text/css" href="css/sidenav.css">
<body style="background:url('img/3.jpg');background-repeat: no-repeat;background-size: 100% 100vh;">
@extends('layouts.app')

@section('content')
<div class="sidenav">
    <img src="img/1.jpg" style="width:250px;height:250px;padding:15px">
    <br>
    <br>
    @if( !is_null($data) )
  <a href="addproduct" id="data">ADD product to sell</a>
  @endif
  <a href="#">Company Name</a>
  <a href="#">Battery</a>
  <a href="#">Ratings</a>
</div>
@if( !is_null($data) )
<div class="container" style="margin-bottom:75px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Latest Selled Items
                    <span style="float:right">
                        <a href="allselled"><button type="button" class="btn btn-dark">View All</button></a>
                    </span>
                </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        
                        <div class="card-deck">
                        @foreach($selldata as $item)
                            <a href="" style="text-decoration:none"><div class="card" style="padding:50px">
                            <div style="text-align:right"> {{ $item->name}}  </div>
                            <div style="text-align:right"> {{ $item->description}}  </div>
                        </div></a>
                        <br>
                        @endforeach 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Latest Bought Items</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if( !is_null($data) )
                        <div class="card-deck">
                        @foreach($selldata as $item)
                            <a href="" style="text-decoration:none"><div class="card" style="padding:50px">
                            <div style="text-align:right"> {{ $item->name}}  </div>
                            <div style="text-align:right"> {{ $item->description}}  </div>
                        </div></a>
                        <br>
                        @endforeach 
                    </div>@endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
</body>