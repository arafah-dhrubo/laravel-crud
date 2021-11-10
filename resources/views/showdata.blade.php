@extends('layout')
@section('title', "Show Data")
@section('content')
@if(Session::has('msg'))
<p class="alert alert-success">{{Session::get('msg')}}</p>
@endif
<a href="/add" class="btn btn-primary">Add User</a>
<table class="table table-hover container">
    <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($showData as $key=>$data )
          <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td>
                <a href="{{url('/edit-data/'.$data->id)}}" class="btn btn-warning">Update</a>
                <a href="{{url('/delete-data/'.$data->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
          </tr>
          @endforeach
      </tbody>
  </table>
  {{$showData->links()}}
@endsection
