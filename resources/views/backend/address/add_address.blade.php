@extends('backend.layouts.master')
@section('title')
    Address
@endsection
@section('content')
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Address Managment </h3>
        <div class="page-header" >
            <a href="{{route('view.address')}}" class="badge badge-danger">View Address</a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <form class="forms-sample" action="{{route('save.address')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
                <div class="form-group">
                  <label for="exampleInputUsername1">Username</label>
                  <input type="text" class="form-control" name="name" id="exampleInputUsername1" placeholder="Please write your name">
                </div>
                <div class="form-group">
                  <label for="phoneNumber">Phone Number</label>
                  <input type="text" class="form-control" name="phone" id="phoneNumber" placeholder="Phone Number">
                </div>
                <div class="form-group">
                    <label for="emailAddress">Email address</label>
                    <input type="email" class="form-control" name="email" id="emailAddress" placeholder="Please Enter your email address">
                </div>
                <div class="form-group">
                    <label for="Address">Address</label>
                    <textarea name="address" id="Address" cols="30" rows="5" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="image">Upload Image</label>
                    <input type="file" class="form-control" name="image" id="image">
                    
                </div>
                <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection