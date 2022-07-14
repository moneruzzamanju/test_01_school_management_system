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
              <th>Specialty</th>
              <th>Phone</th>
              <th>Email</th>
              <th>Gender</th>
              <th>Address</th>
              <th>Photo</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($teachers as $teacher)
            <tr>
              <td>{{ $teacher->id }}</td>
              <td>{{ $teacher->first_name }}</td>
              <td>{{ $teacher->last_name }}</td>
              <td>{{ $teacher->specialty }}</td>
              <td>{{ $teacher->phone }}</td>
              <td>{{ $teacher->email }}</td>
              <td>{{ $teacher->gender }}</td>
              <td>{{ $teacher->address }}</td>
              <td>{{ $teacher->photo}}</td>
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