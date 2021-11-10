@extends('layout')
@section('title', "Add Data")
@section('content')
<a href="/" class="btn btn-primary my-3">Show Data</a>
@if(Session::has('msg'))
<p class="alert alert-success">{{Session::get('msg')}}</p>
@endif
<form action="{{url('/store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input class="form-control" type="text" name="name" id="name">
            @error('name')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="text" name="email" id="email">
            @error('email')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <input type="submit" value="Add User" class="btn btn-primary w-100">
    </form>

@endsection
