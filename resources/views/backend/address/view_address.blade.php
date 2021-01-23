@extends('backend.layouts.master')
@section('title')
    Add Address
@endsection
@section('content')
<div class="">
    <div class="content-wrapper">
      <div class="page-header" >
        <h3 class="page-title"> Address Table </h3>
          <a href="{{route('add.address')}}" class="badge badge-danger">Add Address</a>
      </div>
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title" style="color:red">{{Session::get('message')}}</h4>
              </p>
              <table  id="example1" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Image</th>
                    <th>Acction</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($viewAddresses as $viewAddress)
                  <tr>
                    <td>{{$viewAddress->id}}</td>
                    <td>{{$viewAddress->name}}</td>
                    <td>{{$viewAddress->phone}}</td>
                    <td>{{$viewAddress->email}}</td>
                    <td>{{$viewAddress->address}}</td>
                    <td><img src="{{$viewAddress->image}}"></td>
                    <td>
                      <a class="btn btn-success btn-sm mr-1" href="">
                          <i class="fas fa-eye">view</i>
                      </a>
                      <a class="btn btn-success btn-sm mr-1" href="{{route('edit.address', $viewAddress->id)}}">
                          <i class="fas fa-edit">edit</i>
                      </a>
                      <a class="btn btn-danger btn-sm mr-1" id="delete" href="{{route('delete.address', $viewAddress->id)}}">
                          <i class="fas fa-trash">delete</i>
                      </a>
                  </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection