@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div style="background: #000000" class="card">
                    <div class="card-body">
                        <h1 style="color: #fecd57; font-size: 80px; font-weight: bold">About AS</h1>
                        <br>
                        <form action="{{ route('aboutSave') }}" method="post">
                            {{ csrf_field() }}
                            <label for="phone" style="font-size: 30px; color: #fecd57">О нас</label>
                            <div>
                                <textarea style="font-weight: bold; border: 2px solid #fecd57; color: #fecd57; background-color: rgba(255, 255, 255, 0.5)" name="text" class="form-control" id="" rows="10">{{$about['text']}}</textarea>
                            </div>
                            <br>
                            <br>
                            <div>
                                <button style="width: 150px; height: 50px; border-radius: 5px; border: none; color: #FFFFFF; background: #fecd57; font-size: 20px; font-weight: bold" type="submit">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



