@extends('layouts.frontApp')

@section('content')
    <section class="about">
        <div class="container about__container">
            <h1 class="about__caption">
                О нас
            </h1>
            <div class="about__disc">
                <p class="about__disc-caption">
                    {{$about['text']}}
                </p>

            <div class="about__background-asphalt">

            </div>
        </div>

    </section>
@endsection