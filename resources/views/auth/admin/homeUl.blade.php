@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h1 style="color: #fecd57; font-size: 80px; font-weight: bold">Home Ul</h1>
                        <br>
                        <form action="{{ route('homeUlSave') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <label for="phone">Left Name</label>
                            <div>
                                <input style="border: 2px solid #fecd57" id="phone" class="form-control" type="text" name="left_name" value="">
                            </div>
                            <br>
                            <label for="fax">Right Name</label>
                            <div>
                                <input style="border: 2px solid #fecd57" id="fax" class="form-control" type="text" name="right_name" value="">
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
