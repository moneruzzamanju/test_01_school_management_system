@extends('backend.layout.master')

@section('content')
<div class="col-md-12">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Add Student</h3>
      </div>
      <form action="{{ route('student.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
          <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter Name">
          </div>
          <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Name">
          </div>
          <div class="form-group">
            <label for="date_of_birth">Date of Birth</label>
            <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" placeholder="Date of Birth">
          </div>
          <div class="form-group">
            <label for="phone">phone</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="phone">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
          </div>

          
          <div class="form-group">
            <label>Gender</label>
            <div class="form-check">
              <input id="male" class="form-check-input" type="radio" name="gender" value="male" checked>
              <label for="male" class="form-check-label">Male</label>
            </div>
            <div class="form-check">
              <input id="female" class="form-check-input" type="radio" name="gender" value="female" >
              <label for="female" class="form-check-label">Female</label>
            </div>
            <div class="form-check">
              <input id="others" class="form-check-input" type="radio" name="gender" value="others">
              <label for="others" class="form-check-label">Others</label>
            </div>
          </div>

          <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address">
          </div>
          <div class="form-group">
            <label for="street_name">Street Name</label>
            <input type="text" class="form-control" id="street_name" name="street_name" placeholder="Enter Street Name">
          </div>
          <div class="form-group">
            <label for="police_station">police station</label>
            <input type="text" class="form-control" id="police_station" name="police_station" placeholder="Enter police station">
          </div>
          <div class="form-group">
            <label for="district">District</label>
            <input type="text" class="form-control" id="district" name="district" placeholder="Enter district">
          </div>
          <div class="form-group">
            <label for="admission_date">Admission Date</label>
            <input type="date" class="form-control" id="admission_date" name="admission_date" placeholder="Enter admission date">
          </div>

          <div class="form-group">
            <input type="file" class="form-control-file" name="image" id="exampleInputFile" onchange="previewFile(this)" aria-describedby="fileHelp">
            <img src="" id="previewImage" alt="Creator Image" style="max-width: 200px;max-height: 200px;margin-top: 10px">
        </div>

        <div class="form-group">
          <label for="category_id">Guardian:</label>
          <select class="select" name="guardian_id" id="">
                  <option value="">--- select Guardian ---</option>
              @foreach($guardians as $guardian)
                  <option value="{{ $guardian->id }}" {{ old('guardian_id')==$guardian? 'selected':''}} >{{ $guardian->father_name }}</option>
              @endforeach
          </select>

        </div>



        </div>


        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
@endsection




