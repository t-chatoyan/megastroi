@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            <div class="col-md-12" style="font-size: 32px;">
                <h1 style="color: #fecd57; font-size: 80px; font-weight: bold">Home Data</h1>
            </div>
        </div>

        @foreach ($datas as $data)
            <div>
                <a href="/delete/home/ul/{{$data['id']}}" style="color: red; background-color: #545b62" class="btn">Delete</a>
                <div style="color: #c87f0a; font-size: 26px">{{$data['left_name']}}</div>
                <br>
                <div style="color: #9f191f; font-size: 15px">{{$data['right_name']}}</div>
                <br><br>
            </div>
        @endforeach
    </div>
@endsection
