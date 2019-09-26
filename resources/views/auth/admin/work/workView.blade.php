@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            <div class="col-md-12" style="font-size: 32px;">
                <h1 style="color: #fecd57; font-size: 80px; font-weight: bold"><center>Home Data</center></h1>
            </div>
        </div>

        @foreach ($works as $work)
            <div>
                <a href="/delete/admin/work/{{$work['id']}}" style="color: red; background-color: #545b62" class="btn">Delete</a>
                <div style="color: #c87f0a; font-size: 26px">{{$work['name']}}</div>
                <br>
                <br><br>
            </div>
        @endforeach
    </div>
@endsection
