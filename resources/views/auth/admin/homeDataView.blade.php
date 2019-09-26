@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            <div class="col-md-12" style="font-size: 32px;">
                <h1>Home Data</h1>
            </div>
        </div>

        @foreach ($datas as $data)
            <div>
                <a href="/delete/home/data/{{$data['id']}}" style="color: red; background-color: #545b62" class="btn">Delete</a>
                <div style="color: #c87f0a; font-size: 26px">{{$data['name']}}</div>
                <br>
                <div style="color: #9f191f; font-size: 15px">{{$data['description']}}</div>
                <br><br>
            </div>
        @endforeach
    </div>
@endsection
