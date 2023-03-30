@extends('layouts.app')

@section('content')
<!--documentation refer to https://laravel.com/docs/4.2/html#labels-->
    {!! Form::open(['route' => 'logistics.store', 'action' => 'LogisticsController@store', 'method' => 'POST'])!!}
        <h2 style = "font-weight: bold;">Add Logistics</h2>

        <div class = "form-group defect_form">
            {{Form::label('item', 'Item')}}
            {{Form::text('item', '', ['class' => 'form-control', 'placeholder' => 'Item'])}} <!--('name of the data (column name),Value' , 'value (Since it is create form there is no value)', 'attributes like classes')-->
        </div>

        <div class = "form-group defect_form">
            {{Form::label('quantity', 'Quantity')}}
            {{Form::number('quantity', '', ['class' => 'form-control', 'placeholder' => '(Number)'])}} <!--('name of the data (column name),Value' , 'value (Since it is create form there is no value)', 'attributes like classes')-->
        </div>

        <div class = "form-group defect_form"> <!--If fault == others show Textbox-->
            {{Form::select('fault',
                ['Lighting' => 'Lighting',
                'Plumbing' => 'Plumbing',
                'Aircon' => 'Aircon',
                'Removal' => 'Removal',
                'Cleaning' => 'Cleaning',
                'Others' => 'Others'],
                null, ['class' => 'form-control', 'placeholder' => 'Fault/Cleaning'])}}
        </div>

        <div class = "form-group defect_form">
            {{Form::label('remarks', 'Remarks')}}
            {{Form::text('remarks', '', ['class' => 'form-control', 'placeholder' => 'Remarks'])}} <!--('name of the data (column name),Value' , 'value (Since it is create form there is no value)', 'attributes like classes')-->
        </div>

        {{Form::submit('Add Logistic', ['class'=>'btn btn-primary', 'style'=> 'margin-top: 10px'])}} <!--Button-->

    {!! Form::close() !!}

@endsection
