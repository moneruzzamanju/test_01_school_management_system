@extends('backend.layout.master')
@section('content')
<div class="col-md-9">
<div class="card">
    <div class="card-header">
        <h1>Guardian Details Page</h1>
    </div>
    <div class="card-body">
        <h1>{{ $guardian->father_name }}</h1>
        <h1>{{ $guardian->father_phone_no }}</h1>
        <h1>{{ $guardian->father_occupation }}</h1>
        <p><img id="previewImage" src="{{ asset($guardian->father_photo) }}" alt="Father Photo" style="max-width: 300px; max-height: 300px;margin-top: 10px"></td>

        <h1>{{ $guardian->mother_name }}</h1>
        <h1>{{ $guardian->mother_phone_no }}</h1>
        <h1>{{ $guardian->mother_occupation }}</h1>
        {{-- <p><img id="previewImage" src="{{ asset($guardian->mother_photo) }}" alt="Mother Photo" style="max-width: 300px; max-height: 300px;margin-top: 10px"></td> --}}

        <h1>{{ $guardian->office_phone }}</h1>
        <h1>{{ $guardian->email }}</h1>
        <h1>{{ $guardian->status }}</h1>

        <a href="{{ route('guardian.index') }}" class="btn btn-outline-success">All Guardian</a>
    </div>
    
</div>
</div>
@endsection