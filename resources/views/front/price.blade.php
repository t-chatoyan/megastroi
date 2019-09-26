@extends('layouts.frontApp')

@section('content')
    <section class="price">
        <div class="container">
            @foreach ($workPrices as $workPrice)
                <p class="price__caption">
                    {{$workPrice['name']}}
                </p>
                @foreach($workPrice->workPrice as $price)
                    <div class="price__list">
                        <p class="price__item"><span class="price__item-text">{{$price['name']}}</span><span class="price__digit">{{$price['price']}}</span></p>
                    </div>
                @endforeach
            @endforeach
        </div>
    </section>
@endsection