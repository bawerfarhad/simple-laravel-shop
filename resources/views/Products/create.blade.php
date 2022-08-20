@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>create section</h1>

        {!! Form::open(['url' => '', 'method'=>'post']) !!}

        {!! Form::label('product-name', 'Product Name', ['class' => 'text-info bg-warning my-4 form-control']); !!}

        {!! Form::text('product-name', 'name of the product',['class' => 'form-control']); !!}

        {!! Form::label('product-description', 'Product description', ['class' => 'text-info bg-warning my-4 form-control']); !!}

        {!! Form::text('product-description', 'describe the product you want to sell',['class' => 'form-control']); !!}

        {!! Form::submit('create',['class' => 'my-4 form-control']); !!}

        {!! Form::close() !!}


    </div>

@endsection()
