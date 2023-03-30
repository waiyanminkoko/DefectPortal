@extends('layouts.app')

@section('content')
<!--documentation refer to https://laravel.com/docs/4.2/html#labels-->
    <h2 style = "font-weight: bold;">Defect Form (Admin)</h2>
    {!! Form::open(['route' => 'defect_report.store', 'action' => 'DefectReportController@store', 'method' => 'POST'])!!}
        <h3 style = "font-weight: bold;">Defect Details</h3>

        <div class = "form-group defect_form">
            <!--{{Form::label('accomodation', 'Select Accomodation Type')}}-->
            <!--('name of the data (column name),Value' , 'value (Since it is create form there is no value)', 'attributes like classes')-->
            {{Form::select('accomodation', ['Boarder' => 'Boarder', 'Boarding Mentor' => 'Boarding Mentor', 'Guest' => 'Guest', 'Staff' => 'Staff'], 'Staff' , ['class' => 'form-control', 'placeholder' => 'Select Accomodation Type'])}}
        </div>

        <div class = "form-group defect_form">
            {{Form::select('hall_location',
                ['A' => 'Hall A',
                'B' => 'Hall B',
                'C' => 'Hall C',
                'D' => 'Hall D',
                'E' => 'Hall E',
                'F' => 'Hall F',
                'G' => 'Hall G',
                'Conference Room' => 'Conference Room',
                'Music Room' => 'Music Room',
                'Common Area' => 'Common Area',
                'Dining Hall' => 'Dining Hall',
                'Function Room' => 'Function Room',
                'Tutorial Room B' => 'Tutorial Room B',
                'utorial Room C' => 'Tutorial Room C',
                'Tutorial Room D' => 'Tutorial Room D'],
                null, ['class' => 'form-control', 'placeholder' => 'Select Hall/Location'])}}
        </div>

        <div class = "form-group defect_form">
            {{Form::select('floor',
                ['1' => '1',
                '2' => '2',
                '3' => '3',
                '4' => '4',
                '5' => '5',
                '6' => '6'],
                null, ['class' => 'form-control', 'placeholder' => 'Select Floor'])}}
        </div>
        <div class = "form-group defect_form"> <!--For Boarders and BM-->
            {{Form::select('cluster',
                ['Left Cluster' => 'Left Cluster',
                'Right Cluster' => 'Right Cluster',
                'Whole Cluster' => 'Whole Cluster',
                'House Master Unit' => 'House Master Unit',
                'Not Applicable' => 'Not Applicable'],
                null, ['class' => 'form-control', 'placeholder' => 'Select Cluster'])}}
        </div>
        <div class = "form-group defect_form"> <!--If fault == others show Textbox-->
            {{Form::select('fault',
                ['Lighting' => 'Lighting',
                'Plumbing' => 'Plumbing',
                'Aircon' => 'Aircon',
                'Removal' => 'Removal',
                'Others' => 'Others'],
                null, ['class' => 'form-control', 'placeholder' => 'Select the Type of Fault'])}}
        </div>

        <div class = "form-group defect_form"> <!--If cluster == hm_unit, not necessary-->
            {{Form::select('room',
                ['1' => '1',
                '2' => '2',
                '3' => '3',
                '4' => '4',
                '5' => '5',
                '6' => '6',
                '7' => '7',
                '8' => '8',
                '9' => '9',
                '10' => '10',
                'Not Applicable' => 'Not Applicable'],
                null, ['class' => 'form-control', 'placeholder' => 'Select Room'])}}
        </div>

        <div class = "form-group defect_form">
            {{Form::label('description', 'Description')}}
            {{Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Description'])}} <!--('name of the data (column name),Value' , 'value (Since it is create form there is no value)', 'attributes like classes')-->
        </div>

        <div class = "form-group defect_form">
            {{Form::label('remarks', 'Remarks')}}
            {{Form::text('remarks', '', ['class' => 'form-control', 'placeholder' => 'Remarks'])}} <!--('name of the data (column name),Value' , 'value (Since it is create form there is no value)', 'attributes like classes')-->
        </div>

        <br>

        <h3 style = "font-weight: bold;">Staff Particulars</h3>
        <div class = "form-group defect_form">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', Auth::user()->name, ['class' => 'form-control', 'placeholder' => 'Name'])}} <!--('name of the data (column name),Value' , 'value (Since it is create form there is no value)', 'attributes like classes')-->
        </div>
        <div class = "form-group defect_form">
            {{Form::label('phone', 'Phone Number')}}
            {{Form::text('phone', '89652354', ['class' => 'form-control', 'placeholder' => '(+65)'])}} <!--('name of the data (column name),Value' , 'value (Since it is create form there is no value)', 'attributes like classes')-->
        </div>

        <div class = "form-group defect_form">
            {{Form::label('email', 'Email')}}
            {{Form::text('email', 'staff@gmail.com', ['class' => 'form-control', 'placeholder' => 'name@example.com'])}} <!--('name of the data (column name),Value' , 'value (Since it is create form there is no value)', 'attributes like classes')-->
        </div>

        {{Form::submit('Submit', ['class'=>'btn btn-primary', 'style'=> 'margin-top: 10px'])}} <!--Button-->
    {!! Form::close() !!}

@endsection
