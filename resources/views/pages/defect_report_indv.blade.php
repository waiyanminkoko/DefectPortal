@extends('layouts.app')

@section('content')
    <a class="btn btn-primary" href="/defect_report" role="button">Go Back</a>
    <h2 style = "margin-left: 15px; font-weight: bold;">{{$defect->$id}}</h2>

    <h3>{{$defect->fault}}</h3>
    <h2>{{$defect->hall_location}}</h2>


    <div>
        {{$defect->$description}}
    </div>

    <hr>
    <small>Written On {{$defect->created_at}}</small>

@endsection
