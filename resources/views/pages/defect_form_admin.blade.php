@extends('layouts.app')

@section('content')
<h2 style = "margin-left: 15px; font-weight: bold;">Defect Form (Admin)</h2>
<div class = "form container-fluid">
    <form method = "POST" action = "/submit_form_admin" id = "form_admin">
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
        <div class="mb-3">
            <label for="formFile" class="form-label">Please Submit a Picture of the Defect</label>
            <input class="form-control" type="file" id="formFile" accept=".jpg, .png .HEIC .mp4" multiple>
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
    <button type="submit" class="btn btn-primary" form= "form_admin" value = "submit">Submit Form</button>
</div>

@endsection
