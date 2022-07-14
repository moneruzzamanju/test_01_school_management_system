@extends('backend.layout.master')
@section('content')
<div class="col-md-9">
<div class="card">
    <div class="card-header">
        <h1>Subject Details Page</h1>
    </div>
    <div class="card-body">
        <h1>{{ $teacher->first_name }}</h1>
        <h1>{{ $teacher->last_name }}</h1>
        <h1>{{ $teacher->specialty }}</h1>
        <h1>{{ $teacher->phone }}</h1>
        <h1>{{ $teacher->email }}</h1>
        <h1>{{ $teacher->gender }}</h1>
        <h1>{{ $teacher->address }}</h1>
        <h1>{{ $teacher->photo }}</h1>
        

        <a href="" class="btn btn-outline-success">Read More</a>
    </div>
    
</div>
</div>
@endsection