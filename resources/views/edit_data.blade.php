@extends('layout')
@section('title', "Update Data")
@section('content')
<a href="/" class="btn btn-primary my-3">Show Data</a>
<form action="{{url('/update-data', $editData->id)}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input class="form-control" value={{$editData->name}} type="text" name="name" id="name">
            @error('name')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" value={{$editData->email}} type="text" name="email" id="email">
            @error('email')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <input type="submit" value="Update User" class="btn btn-primary w-100">
    </form>

@endsection
