@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            <div class="col-md-12" style="font-size: 32px;">
                <h1 style="color: #fecd57; font-size: 80px; font-weight: bold"><center>Home Data</center></h1>
            </div>
        </div>

        @foreach ($workPrices as $workPrice)
            <div>
                <div>
                    <span><h1>{{$workPrice['name']}}</h1></span>
                </div>
                @foreach($workPrice->workPrice as $price)
                    <a href="/delete/admin/work/price/{{$price['id']}}" style="color: red; background-color: #545b62" class="btn">Delete</a>
                    <div style="color: #c87f0a; font-size: 26px">
                        <span>{{$price['name']}}</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span style="color: red">{{$price['price']}}</span>
                    </div>
                    <br>
                    <br><br>
                @endforeach
            </div>
        @endforeach
    </div>
@endsection
