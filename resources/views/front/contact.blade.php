@extends('layouts.frontApp')

@section('content')
    <section class="contact">
        <div class="container contact-container">
            <h1 class="contact__caption">
                Контакты
            </h1>
            <ul class="contact__list">
                {{--<li class="contact__list-item"><strong class="bold">Астра</strong></li>--}}
                <li class="contact__list-item">{{$contact['address']}}</li>
                <li class="contact__list-item"><a class="contact__link" href="#">Тел: {{$contact['phone']}}</a></li>
                <li class="contact__list-item">Факс: {{$contact['fax']}}</li>
                <li class="contact__list-item"><a class="contact__link" href="#">{{$contact['email']}}</a></li>
            </ul>
        </div>
    </section>
@endsection