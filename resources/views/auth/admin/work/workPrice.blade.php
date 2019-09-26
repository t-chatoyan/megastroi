@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div style="background: #000000" class="card">
                    <div class="card-body">
                        <h1 style="color: #fecd57; font-size: 80px; font-weight: bold">Work</h1>
                        <br>
                        <form action="{{ route('workPriceSave') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <label style="color: #fecd57" for="workName">Select Work</label>
                            <select style="background-color: rgba(255, 255, 255, 0.5); border: 2px solid #fecd57; color: #fecd57; font-weight: bold;" name="workId" id="workName" class="form-control">
                                @foreach ($works as $key => $value)
                                    <option value="{{ $value['id'] }}">{{ $value['name'] }}</option>
                                @endforeach
                            </select>
                            <br>
                            <label style="color: #fecd57" for="work">Name</label>
                            <div>
                                <input style=" background-color: rgba(255, 255, 255, 0.5); border: 2px solid #fecd57; color: #fecd57; font-weight: bold;" id="work" class="form-control" type="text" name="name">
                            </div>
                            <br>
                            <label style="color: #fecd57" for="price">Price</label>
                            <div>
                                <input style=" background-color: rgba(255, 255, 255, 0.5); border: 2px solid #fecd57; color: #fecd57; font-weight: bold;" id="price" class="form-control" type="text" name="price">
                            </div>
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
