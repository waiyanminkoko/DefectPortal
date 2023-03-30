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
                <form method = "post" action = "/submit_form_user" id = "form_user">
                {{ csrf_field() }}
                @csrf
                <h3 bold>Defect Details</h3>
                <div class="mb-3">
                    <select class="form-select" aria-label="Cluster" name = "accomodation"> <!--Hall/Location or seperate out the menu-->
                        <option disabled selected>Select Accomodation Type</option>
                        <option value="boarder">Boarder</option>
                        <option value="bm">Boarding Mentor</option>
                        <option value="guest">Guest</option>
                    </select>
                </div>
                <div class="mb-3">
                    <select class="form-select" aria-label="Hall/Location" name = "hall_location"> <!--Hall/Location or seperate out the menu-->
                        <option disabled selected>Select Hall/Location</option>
                        <option value="hall_a">Hall A</option>
                        <option value="hall_b">Hall B</option>
                        <option value="hall_c">Hall C</option>
                        <option value="hall_d">Hall D</option>
                        <option value="hall_e">Hall E</option>
                        <option value="hall_f">Hall F</option>
                        <option value="hall_g">Hall G</option>
                        <option value="conference_room">Conference Room</option>
                        <option value="common_area">Common Area</option>
                        <option value="dining_hall">Dining Hall</option>
                        <option value="function_room">Function Room</option>
                        <option value="trb">Tutorial Room B</option>
                        <option value="trc">Tutorial Room C</option>
                        <option value="trd">Tutorial Room D</option>
                    </select>
                </div>
                <div class="mb-3">
                    <select class="form-select" aria-label="Floor" name = "floor">
                        <option disabled selected>Select Floor</option>
                        <option value="floor1">1</option>
                        <option value="floor2">2</option>
                        <option value="floor3">3</option>
                        <option value="floor4">4</option>
                        <option value="floor5">5</option>
                        <option value="floor6">6</option>
                    </select>
                </div>
                <div class="mb-3">
                    <select class="form-select" aria-label="Cluster" name = "cluster"> <!--Cluster for (A-D)-->
                        <option disabled selected>Select Cluster</option>
                        <option value="left_cluster">Left Cluster</option>
                        <option value="right_cluster">Right Cluster</option>
                        <option value="right_cluster">Whole Cluster</option>
                    </select>
                </div>
                <div class="mb-3">
                    <select class="form-select" aria-label="Room" name = "room">
                        <option disabled selected>Select Room</option>
                        <option value="room1">1</option>
                        <option value="room2">2</option>
                        <option value="room3">3</option>
                        <option value="room4">4</option>
                        <option value="room5">5</option>
                        <option value="room6">6</option>
                        <option value="room7">7</option>
                        <option value="room8">8</option>
                        <option value="room9">9</option>
                        <option value="room10">10</option>
                    </select>
                </div>
                <div class="mb-3">
                    <select class="form-select" aria-label="Type of Fault" name = "fault">
                        <option disabled selected>Select the Type of Fault</option>
                        <option value="lighting">Lighting</option>
                        <option value="plumbing">Plumbing</option>
                        <option value="aircon">Aircon</option>
                        <option value="removal">Removal</option>
                        <option value="others">Others</option>
                    </select>
                </div>
                    <!--display files sent by the user, needa research-->
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                    <textarea type = "description" class="form-control" id="exampleFormControlTextarea1" rows="3" name = "description"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Remarks</label>
                    <textarea type = "remarks" class="form-control" id="exampleFormControlTextarea1" rows="3" name = "remarks"></textarea>
                </div>
                <h3 bold>Particulars</h3>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                    <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Name" name = "name">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name = "email">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Phone</label>
                    <input type="phone" class="form-control" id="exampleFormControlInput1" placeholder="Phone Number" name = "phone">
                </div>
            <!--</form>-->
                </form>
                <button type="submit" class="btn btn-primary" form= "form_user" value = "submit">Submit Form</button>
            </div>

        </div>
    </div>
</div>




        </main>
</body>
</html>
