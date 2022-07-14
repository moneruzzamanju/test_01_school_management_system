@extends('backend.layout.master')

@section('content')
<div class="col-md-12">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Quick Example</h3>
      </div>
      <form action="{{ route('subject.update',$subject->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-body">
          <div class="form-group">
            <label for="name">Subject Name</label>
            <input type="text" class="form-control" id="name" value="{{ $subject->name }}" name="name" placeholder="Enter Subject Name">
          </div>
          <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" value="{{ $subject->description }}" name="description" placeholder="Description">
          </div>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
@endsection