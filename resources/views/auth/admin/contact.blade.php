@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div style="background: #000000" class="card">
                    <div class="card-body">
                        <h1 style="color: #fecd57; font-size: 80px; font-weight: bold">Contact</h1>
                        <br>
                        <form action="{{ route('contactSave') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <label style="color: #fecd57" for="phone">Phone</label>
                            <div>
                                <input style=" background-color: rgba(255, 255, 255, 0.5); border: 2px solid #fecd57; color: #fecd57; font-weight: bold;" id="phone" class="form-control" type="text" name="phone" value="{{$contact['phone']}}">
                            </div>
                            <br>
                            <label style="color: #fecd57" for="fax">Fax</label>
                            <div>
                                <input style=" background-color: rgba(255, 255, 255, 0.5); border: 2px solid #fecd57; color: #fecd57; font-weight: bold;" id="fax" class="form-control" type="text" name="fax" value="{{$contact['fax']}}">
                            </div>
                            <br>
                            <label style="color: #fecd57" for="email">email</label>
                            <div>
                                <input style=" background-color: rgba(255, 255, 255, 0.5); border: 2px solid #fecd57; color: #fecd57; font-weight: bold;" id="email" class="form-control" type="email" name="email" value="{{$contact['email']}}">
                            </div>
                            <br>
                            <label style="color: #fecd57" for="address">Address</label>
                            <div>
                                <input style=" background-color: rgba(255, 255, 255, 0.5); border: 2px solid #fecd57; color: #fecd57; font-weight: bold;" id="address" class="form-control" type="text" name="address" value="{{$contact['address']}}">
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
