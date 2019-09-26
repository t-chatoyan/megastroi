@extends('layouts.frontApp')

@section('content')
    <section class="galery">
        <div class="owl-carousel owl-theme">
            @foreach($images as $image)
                    <div class="item"><img class="galery__img" src="images/{{$image['img']}}" alt=""></div>
            @endforeach
        </div>
    </section>

    <section class="images">
        <div class="container images__container">
            @foreach($images as $image)
                <div class="images__block">
                    <p class="images__caption">{{$image['name']}}</p>
                    <img src="images/{{$image['img']}}" alt="" class="images__piece">
                </div>
            @endforeach
        </div>
    </section>

    <section class="asphalt">
        <div class="container asphalt__container">
            @foreach($datas as $data)
                <p class="asphalt__text">
                    <strong class="asphalt__caption">
                        {{$data['name']}}
                    </strong>
                    {{$data['description']}}
                </p>
            @endforeach

        </div>
    </section>

    <section class="table">
        <div class="container table__container">
            <div class="table__block">
                <ul class="table__list">
                    @foreach($homeData as $data)
                        <li class="table__item"><span class="table__item-mark">{{$data['left_name']}}</span></li>
                    @endforeach
                </ul>
                <div class="table__line"></div>
                <ul class="table__list">
                    @foreach($homeData as $data)
                        <li class="table__item"><span class="table__item-mark">{{$data['right_name']}}</span></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>

@endsection