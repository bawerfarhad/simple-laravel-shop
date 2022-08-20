@extends('layouts.app')

@section('content')

    <div class="">
        <div class="row  justify-content-center">
            <div class="col-4 align-items-center">
                <h1 class="text-center rounded-5 border-bottom border-info col  bg-black text-warning "> products section </h1>
            </div>
        </div>
           <div class="container">
                <div class="row">
                    <div class="">
                        @foreach($Products as $Product)
                            <div class="card d-inline-block m-2" style="width: 18rem;">
                                {{--            <img src="..." class="card-img-top" alt="...">--}}
                                <div class="card-body">
                                    <h5 class="card-title">{{$Product->name}}</h5>
                                    <p class="card-text">{{$Product->created_at}}</p>
                                    <a href="/products/{{$Product->id}}" class="btn btn-primary">read more</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
           </div>
    </div>
@endsection()
