@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-9 text-center pb-4 bg-info position-absolute top-50 start-50 translate-middle rounded-4 ">
            <h1>this project is about shopping, and also tying to deploy it in heroku </h1>
            <img src="{{url('/assets/images/shop.png')}}" width="260px" class="pb-4" alt="">

            <div class="">
                <a href="" class="btn btn-warning">login</a>
                <a href="/products" class="btn btn-danger">products</a>
                <a href="" class="btn btn-primary">sellers</a>
                <a href="" class="btn btn-success">about</a>
            </div>
        </div>
    </div>


@endsection()
