@extends('layouts.app')

@section('content')

        <h2 style = "font-weight: bold;">Individual Logistics</h2>

        <h3>Item: {{$logistic->item}}</h3>
        <h4>Quantity: {{$logistic->quantity}}</h4>
        <h4>Fault: {{$logistic->fault}}</h4>
        <p>Remarks: {{$logistic->remarks}}</p>

        <!--<a class="btn btn-primary log" href="/logistics/{{$logistic->id}}/edit" role="button">Edit</a>-->

        <form method = "POST" action = "/logistics/{{$logistic->id}}">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger log">Delete</button>
        </form>

        <a class="btn btn-primary log" href="/logistics" role="button">Back</a>


    <!--{!! Form::close() !!}-->

@endsection
