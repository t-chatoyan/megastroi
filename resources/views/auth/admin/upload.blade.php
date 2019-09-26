@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div style="background: #000000" class="card">
                    <div class="card-body">
                        <a style="color: #fecd57; border-bottom: 1px solid #fecd57; padding-bottom: 1px; text-decoration: none" href="{{route('uploadView')}}">Upload Images</a>
                        <br>
                        <form action="{{ route('uploadImages') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <label style="color: #fecd57; font-size: 40px; font-weight: bold" for="name">Name Images</label>
                            <div>
                                <input style="border: 2px solid #fecd57" id="name" class="form-control" type="text" name="name">
                            </div>
                            <br>
                            <div>
                                <input style="color: #fecd57" type="file" name="file">
                            </div>
                            <br>
                            <div>
                                <button style="width: 150px; height: 50px; border-radius: 5px; border: none; color: #FFFFFF; background: #fecd57; font-size: 20px; font-weight: bold" type="submit">Upload!</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
