<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Logo Icons -->
    <link rel="icon" sizes="192x192" href="/static/android-icon-192x192.png">
    <link rel="apple-touch-icon" href="/static/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/static/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/static/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/static/apple-icon-152x152.png">
    <link rel="shortcut icon" href="/static/favicon.ico"/>

    <!--Local CSS-->
    <link href="/css/styles.css" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>HCIBS Defect Portal</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand container-fluid" href="{{ url('/defect_form_user') }}">
                  <img src="/static/hcibslogo.png" alt="HCIBS Logo" width="32" height="32" class="d-inline-block align-text-top">
                  HCIBS Defect Portal
                </a>
            </div>
        </nav>

        <main class="py-4">
        <div class="container-fluid text-left">
              <div class="col col-lg-12">
                <div class = "form container-fluid">
                    <h2 style = "font-weight: bold;">Defect Form</h2>
                    {!! Form::open(['route' => 'defect_form_user_laravel.store', 'action' => 'DefectFormUserController@store', 'method' => 'POST'])!!}
                        <h3 style = "font-weight: bold;">Defect Details</h3>

                        <div class = "form-group defect_form">
                            <!--{{Form::label('accomodation', 'Select Accomodation Type')}}-->
                            <!--('name of the data (column name),Value' , 'value (Since it is create form there is no value)', 'attributes like classes')-->
                            {{Form::select('accomodation', ['Boarder' => 'Boarder', 'Boarding Mentor' => 'Boarding Mentor', 'Guest' => 'Guest'], null , ['class' => 'form-control', 'placeholder' => 'Select Accomodation Type'])}}
                            <!--Need to set the accomodation to "Office Staff" for Admin-->
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
                        <h3 style = "font-weight: bold;">Particulars</h3> <!--Remove from Admin not necessary-->

                        <div class = "form-group defect_form">
                            {{Form::label('name', 'Name')}}
                            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name'])}} <!--('name of the data (column name),Value' , 'value (Since it is create form there is no value)', 'attributes like classes')-->
                        </div>

                        <div class = "form-group defect_form">
                            {{Form::label('phone', 'Phone Number')}}
                            {{Form::text('phone', '', ['class' => 'form-control', 'placeholder' => '(+65)'])}} <!--('name of the data (column name),Value' , 'value (Since it is create form there is no value)', 'attributes like classes')-->
                        </div>

                        <div class = "form-group defect_form">
                            {{Form::label('email', 'Email')}}
                            {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'name@example.com'])}} <!--('name of the data (column name),Value' , 'value (Since it is create form there is no value)', 'attributes like classes')-->
                        </div>

                        {{Form::submit('Submit', ['class'=>'btn btn-primary', 'style'=> 'margin-top: 10px'])}} <!--Button-->
                    {!! Form::close() !!}
                    </div>

                </div>
            </div>
        </div>

    </main>
</body>

</html>
