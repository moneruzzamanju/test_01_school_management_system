@extends('backend.layout.master')
@section('content')
<div class="col-md-9">
<div class="card">
    <div class="card-header">
        <h1>Subject Details Page</h1>
    </div>
    <div class="card-body">
        <h1>{{ $subject->name }}</h1>
        <h1>{{ $subject->description }}</h1>

        <a href="" class="btn btn-outline-success">Read More</a>
    </div>
    
</div>
</div>
@endsection