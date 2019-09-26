@extends('layouts.frontApp')

@section('content')
    <section class="partner">
        <div class="container partner__container">
            <h1 class="partner__caption">
                Наши партнеры
            </h1>
            <div class="partner__block">
                <ul class="partner__list">
                    @foreach($partners as $partner)
                        <li class="partner__list-item">
                            <a class="partner__list-link" href="">
                                <img class="partner__logo" src="images/{{$partner['img']}}" alt="">
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
@endsection