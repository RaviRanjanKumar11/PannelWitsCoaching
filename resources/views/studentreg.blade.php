@extends('layouts.app')

@section('title', 'Student Registration')

@section('content')

<div class="container">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header text-center text-dark">
            Student Registration
        </div>
        <form action="{{ route('student.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="d-flex">
                <div class="row p-3">
                    <div class="col-md-3">
                        <label for="name">Full Name</label>
                        <input type="text" class="form-control form-control-sm" id="name" name="name" placeholder="Enter your full name" autofocus>
                    </div>
                    <div class="col-md-3">
                        <label for="aadhar">Aadhar No</label>
                        <input type="text" class="form-control form-control-sm" id="aadhar" name="aadhar" placeholder="Enter your aadhar" autofocus>
                    </div>
                    <div class="col-md-3">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control form-control-sm" id="email" name="email" placeholder="Enter your email">
                    </div>
                    <div class="col-md-3">
                        <label for="phone">Phone Number</label>
                        <input type="tel" class="form-control form-control-sm" id="phone" name="phone" placeholder="Enter your phone number">
                    </div>
                    <div class="col-md-3">
                        <label for="pan">Pan</label>
                        <input type="tel" class="form-control form-control-sm" id="pan" name="pan" placeholder="Enter your pan number">
                    </div>
                    <div class="col-md-3">
                        <label for="regNo">RegNo</label>
                        <input type="tel" class="form-control form-control-sm" id="regNo" name="regNo" placeholder="Enter your regno number">
                    </div>
                    <div class="col-md-3">
                        <label for="address">Address</label>
                        <textarea class="form-control form-control-sm" id="address" name="address" rows="3" placeholder="Enter your address"></textarea>
                    </div>
                    <div class="col-md-3">
                        <label for="course">Course</label>
                        <select class="form-control form-control-sm" id="course" name="course">
                            <option>Select your course</option>
                            <option>Nimcet</option>
                            <option>Web D</option>
                            <option>Adca</option>
                            <option>Dca</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="duration">Duration</label>
                        <select class="form-control form-control-sm" id="duration" name="duration">
                            <option>Select course duration</option>
                            <option>3Month</option>
                            <option>6month</option>
                            <option>12month</option>
                            <option>24month</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="photo">Upload Photo</label>
                        <input type="file" class="form-control-file form-control-sm" id="photo" name="photo">
                    </div>
                    <div class="col-md-3">
                        <label for="sign">Upload Sign</label>
                        <input type="file" class="form-control-file form-control-sm" id="sign" name="sign">
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
