@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h1>Home Data Create</h1>
                        <br>
                        <form action="{{ route('homeDataSave') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <label for="phone">Name</label>
                            <div>
                                <input id="phone" class="form-control" type="text" name="name" value="">
                            </div>
                            <br>
                            <label for="fax">Description</label>
                            <div>
                                <input id="fax" class="form-control" type="text" name="description" value="">
                            </div>
                            <br>
                            <div>
                                <button type="submit">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
