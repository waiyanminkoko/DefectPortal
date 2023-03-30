@extends('layouts.app')

@section('content')
<h2 style = "margin-left: 15px; font-weight: bold;">Defect Dashboard</h2>

       <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
            <div class="card h-100 w-50">
            <img src = "/static/dashboard_defect.png" height = 43px width = 43px style = "margin-left: 10px">
                <div class="card-body">
                    <h5 class="card-title">Total Defect Reports</h5>
                    <h3 class="card-text">{{$defects}}</h3>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 w-50">
            <img src = "/static/logistics.png" height = 43px width = 43px style = "margin-left: 10px">
                <div class="card-body">
                    <h5 class="card-title">Total Logistics</h5>
                    <h3 class="card-text">{{$logistics}}</h3>
                </div>
            </div>
        </div>
    </div>

        
@endsection
