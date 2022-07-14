@extends('backend.layout.master')

@section('content')
<div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Responsive Hover Table</h3>

        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

            <div class="input-group-append">
              <button type="submit" class="btn btn-default">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
          <thead>
            <tr>
              <th>ID</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Date of Birth</th>
              <th>Phone</th>
              <th>Email</th>
              <th>Gender</th>
              <th>Address</th>
              <th>Street Name</th>
              <th>Police Station</th>
              <th>District</th>
              <th>Admission Date</th>
              <th>Photo</th>
              <th>Gurdian</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($students as $student)
            <tr>
              <td>{{ $student->id }}</td>
              <td>{{ $student->first_name }}</td>
              <td>{{ $student->last_name }}</td>
              <td>{{ $student->date_of_birth }}</td>
              <td>{{ $student->phone }}</td>
              <td>{{ $student->email }}</td>
              <td>{{ $student->gender }}</td>
              <td>{{ $student->address }}</td>
              <td>{{ $student->street_name }}</td>
              <td>{{ $student->police_station }}</td>
              <td>{{ $student->district }}</td>
              <td>{{ $student->admission_date }}</td>
              <td>{{ $student->photo }}</td>
              <td>{{ $student->guardian_id }}</td>
              <td>{{ $student->status }}</td>
              <td>
                <a href="" 
                class="btn btn-info update_product_form">
                <i class="las la-info"></i>
              </a>
                <a href="" 
                class="btn btn-success update_product_form">
                <i class="las la-edit"></i>
              </a>
                <a href="" 
                class="btn btn-danger delete_product">
                <i class="las la-times"></i>
              </a>
            </td>
            </tr>
            @endforeach

          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
@endsection