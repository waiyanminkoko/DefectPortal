@extends('layouts.app')

@section('content')
<h2 style = "margin-left: 15px; font-weight: bold;">Defect Report</h2>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col" style="width:10vw">Created at</th>
                <th scope="col" style="width:10vw">Accomodation</th>
                <th scope="col" style="width:10vw">Location/Hall / Floor</th>
                <th scope="col" style="width:10vw">Cluster/Room</th>
                <th scope="col" style="width:10vw">Fault</th>
                <th scope="col" style="width:10vw">Description</th>
                <!--<th scope="col" style="width:7vw">Picture</th>-->
                <th scope="col" style="width:10vw">Remarks</th>
                <th scope="col" style="width:10vw">Particulars</th>
                <!--<th scope="col" style="width:10vw">Logistics</th>-->
                <th scope="col" style="width:10vw">Status</th>
              </tr>
        </thead>
        <tbody>

                @if(count($defects)>0)
                    @foreach($defects as $defect)
                    <tr>
                        <td>{{$defect->created_at}}</td>
                        <!--<td>{{$defect->updated_at}}</td>-->
                        <td>{{$defect->accomodation}}</td>
                        <td>{{$defect->hall_location}}{{$defect->floor}}/{{$defect->room}}</td>
                        <td>{{$defect->cluster}}</td>
                        <td>{{$defect->fault}}</td>
                        <td>{{$defect->description}}</td>
                        <!--<td>(Image)</td>-->
                        <td>{{$defect->remarks}}</td>
                        <td>
                            <p>Name: {{$defect->name}}</p>
                            <p>Phone: {{$defect->phone}}</p>
                            <p>Email: {{$defect->email}}</p>
                        </td>
                        <!--<td>(Logistics)</td>-->
                        <td>
                            <p>{{$defect->status}}</p>
                            <div class="dropdown">
                                <a class="btn btn-primary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Update Status
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="defect_report/{{$defect->id}}/{{'Pending'}}">Pending</a></li>
                                    <li><a class="dropdown-item" href="defect_report/{{$defect->id}}/{{'In Progress'}}">In Progress</a></li>
                                    <li><a class="dropdown-item" href="defect_report/{{$defect->id}}/{{'Complete'}}">Complete</a></li>
                                </ul>
                            </div>
                            <!--
                            <form method = "POST" action = "#" accept-charset="UTF-8">
                                {{ csrf_field() }}
                                <p><button class="btn btn-primary btn_red" type="submit" style="font-weight:bold;">Pending</button></p>
                            </form>

                            <form method = "POST" action = "#" accept-charset="UTF-8">
                                {{ csrf_field() }}
                                <p><button class="btn btn-primary btn_orange" type="submit" style="font-weight:bold;">In Progress</button></p>
                            </form>

                            <form method = "POST" action = "#" accept-charset="UTF-8">
                                {{ csrf_field() }}
                                <p><button class="btn btn-primary btn_green" type="submit" style="font-weight:bold;" href = "#">Complete</button></p>
                            </form>-->
                        </td>
                    </tr>
                    @endforeach

                    {{$defects->links()}} <!--paginate (pages)-->

                    @else
                        <h4 style = "margin-left: 15px">No Defect Found</h4>
                    @endif

        </tbody>
    </table>

    <!--@if(count($defects)>0)
        @foreach($defects as $defect)
            <div class = "well">
                <h3>{{$defect->fault}}</h3>
                <h2>{{$defect->hall_location}}</h2>
                <small>Written On {{$defect->created_at}}</small>
            </div>
        @endforeach
        {{$defects->links()}}
    @else
        <p>No Defect Found</p>
    @endif-->

@endsection
