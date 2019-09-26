@extends('layouts.app')

@section('content')
    <div class="container">
        <div style="background: #fecd57; padding: 20px 0 20px 10px" class="col-md-12" style="background-color: #545b62; color: white;">
            <a style="font-weight: bold; color: #000000" href="{{route('partners')}}" style="color: whitesmoke;">Create Partners</a>
        </div>
    </div>

    @foreach ($images as $img)
        <div class="col-md-4">
            <div class="col-md-12">
                {{$img['name']}}
            </div>
            <div>
                <img style="width: 100%; height: initial" src="/images/{{$img['img']}}" alt="">
            </div>
            <br>
            <div class="delete">
                <a href="/delete/partners/{{$img['id']}}" class="button">Delete</a>
            </div>
            <br>
        </div>
    @endforeach
@endsection
