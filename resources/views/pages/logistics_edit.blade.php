@extends('layouts.app')

@section('content')

    <form method = "POST" action = "/logistics/{{$logistic->id}}">
        @csrf
        @method('PUT')
        <h2 style = "font-weight: bold;">Edit Logistics</h2>

        <div class = "form-group defect_form">
            {{Form::label('item', 'Item')}}
            {{Form::text('item', $logistic->item, ['class' => 'form-control', 'placeholder' => 'Item'])}} <!--('name of the data (column name),Value' , 'value (Since it is create form there is no value)', 'attributes like classes')-->
        </div>

        <div class = "form-group defect_form">
            {{Form::label('quantity', 'Quantity')}}
            {{Form::number('quantity', $logistic->quantity, ['class' => 'form-control', 'placeholder' => '(Number)'])}} <!--('name of the data (column name),Value' , 'value (Since it is create form there is no value)', 'attributes like classes')-->
        </div>

        <div class = "form-group defect_form"> <!--If fault == others show Textbox-->
            {{Form::select('fault',
                ['Lighting' => 'Lighting',
                'Plumbing' => 'Plumbing',
                'Aircon' => 'Aircon',
                'Removal' => 'Removal',
                'Cleaning' => 'Cleaning',
                'Others' => 'Others'],
                $logistic->fault, ['class' => 'form-control', 'placeholder' => 'Fault/Cleaning'])}}
        </div>

        <div class = "form-group defect_form">
            {{Form::label('remarks', 'Remarks')}}
            {{Form::text('remarks', $logistic->remarks, ['class' => 'form-control', 'placeholder' => 'Remarks'])}} <!--('name of the data (column name),Value' , 'value (Since it is create form there is no value)', 'attributes like classes')-->
        </div>
        <!--{{Form::hidden('_method','PUT')}}-->
        <button class='btn btn-primary', style='margin-top: 10px'> Save Edit</button>
        {{Form::submit('Save Edit', ['class'=>'btn btn-primary', 'style'=> 'margin-top: 10px'])}} <!--Button-->
    </form>
    <!--{!! Form::close() !!}-->

@endsection
