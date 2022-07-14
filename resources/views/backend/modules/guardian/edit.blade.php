@extends('backend.layout.master')

@section('content')
<div class="col-md-12">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Update Guardian</h3>
      </div>
      <form action="{{ route('guardian.update',$guardian->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card-body">
          <div class="form-group">
            <label for="father_name">Father Name</label>
            <input type="text" class="form-control" id="father_name" name="father_name" value="{{ $guardian->father_name }}" placeholder="Enter Father Name">
          </div>
          <div class="form-group">
            <label for="father_phone_no">Father Phone Number</label>
            <input type="text" class="form-control" id="father_phone_no" name="father_phone_no" value="{{ $guardian->father_phone_no }}" placeholder="Enter Father Phone No">
          </div>
          <div class="form-group">
            <label for="father_occupation">Father Occupation</label>
            <input type="text" class="form-control" id="father_occupation" name="father_occupation" value="{{ $guardian->father_occupation }}" placeholder="Father Occupation">
          </div>

          
          <div class="form-group">
            <input type="file" class="form-control-file" name="image" id="exampleInputFile" onchange="previewFile(this)" aria-describedby="fileHelp">
            <img src="{{ asset($guardian->father_photo) }}" id="previewImage" alt="Image" style="max-width: 200px;max-height: 200px;margin-top: 10px">
        </div>


          <div class="form-group">
            <label for="mother_name">mother name</label>
            <input type="text" class="form-control" id="mother_name" name="mother_name" value="{{ $guardian->mother_name }}" placeholder="Mother Name">
          </div>

          <div class="form-group">
            <label for="mother_phone_no">mother Phone Number</label>
            <input type="text" class="form-control" id="mother_phone_no" name="mother_phone_no" value="{{ $guardian->mother_phone_no }}" placeholder="Mother Phone No">
          </div>

          <div class="form-group">
            <label for="mother_occupation">mother Occupation</label>
            <input type="text" class="form-control" id="mother_occupation" name="mother_occupation" value="{{ $guardian->mother_occupation }}" placeholder="Mother Occupation">
          </div>

          
          {{-- <div class="form-group">
            <input type="file" class="form-control-file" name="mother_photo" id="exampleInputFile" onchange="previewFile(this)" aria-describedby="fileHelp">
            <img src="" id="previewImage" alt="Image" style="max-width: 200px;max-height: 200px;margin-top: 10px">
        </div> --}}


          <div class="form-group">
            <label for="office_phone">Office Phone</label>
            <input type="text" class="form-control" id="office_phone" name="office_phone" value="{{ $guardian->office_phone }}" placeholder="Enter Office Phone">
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $guardian->email }}" placeholder="Email">
          </div>

        </div>

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Update Guardian</button>
        </div>
      </form>
    </div>
  </div>
@endsection




