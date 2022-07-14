@extends('backend.layout.master')
@section('content')
<div class="col-md-9">
<div class="card">
    <div class="card-header">
        <h1>Subject Details Page</h1>
    </div>
    <div class="card-body">
        <h1>{{ $student->first_name }}</h1>
        <h1>{{ $student->last_name }}</h1>
        <h1>{{ $student->date_of_birth }}</h1>
        <h1>{{ $student->phone }}</h1>
        <h1>{{ $student->email }}</h1>
        <h1>{{ $student->gender }}</h1>
        <h1>{{ $student->address }}</h1>
        <h1>{{ $student->street_name }}</h1>
        <h1>{{ $student->police_station }}</h1>
        <h1>{{ $student->district }}</h1>
        <h1>{{ $student->admission_date }}</h1>
        <h1>{{ $student->photo }}</h1>
        <h1>{{ $student->guardian_id }}</h1>

        <a href="{{ route('student.index') }}" class="btn btn-outline-success">All Students</a>
    </div>
    
</div>
</div>
@endsection