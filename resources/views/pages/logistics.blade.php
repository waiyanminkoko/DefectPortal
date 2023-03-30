@extends('layouts.app')

@section('content')
<h2 style = "margin-left: 10px; font-weight: bold;">Logistics</h2>
    <!--Apply Margin to seperate it from the sidebar-->
    <div id = "buttons_logistics">
        <!--Edit logistics list in database (table:logistics)-->
        <a class="btn btn-primary" href="/logistics_add" role="button">Add</a>
    </div>


    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col" style="width:10vw">ID</th>
                <th scope="col" style="width:20vw">Item</th>
                <th scope="col" style="width:20vw">Quantity</th>
                <th scope="col" style="width:20vw">Fault/Cleaning</th>
                <th scope="col" style="width:20vw">Remarks</th>
              </tr>
        </thead>
        <tbody>

                @if(count($logistics)>0)
                    @foreach($logistics as $logistic)
                    <tr>
                        <td>{{$logistic->id}}</td>
                        <td>
                            <a href ="/logistics/{{$logistic->id}}" $id>{{$logistic->item}}</a>
                            <!--<a href ="/logistics/{{$logistic->id}}/edit" $id>{{$logistic->item}}</a>-->
                        </td>
                        <td>{{$logistic->quantity}}</td>
                        <td>{{$logistic->fault}}</td>
                        <td>{{$logistic->remarks}}</td>
                    </tr>
                    @endforeach

                    {{$logistics->links()}} <!--paginate (pages)-->

                    @else
                        <h4 style = "margin-left: 15px">No Item Found</h4>
                    @endif

        </tbody>
    </table>

@endsection
