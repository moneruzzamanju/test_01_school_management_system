@extends('backend.layout.master')

@section('content')
<div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">All Students Page</h3>

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
              <th>Action</th>
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
              <td><img src="{{$student->photo }}" style="max-width: 75px;max-height: 75px;margin-top: 10px" alt="Photo"></td>
              <td>{{ $student->guardian->father_name }}</td>
              <td>{{ $student->status }}</td>

              <td class="d-flex justify">
                <a href="{{ route('student.show',$student->id) }}" 
                class="btn btn-info ">
                <i class="las la-info"></i>
              </a>
                <a href="{{ route('student.edit',$student->id) }}" 
                class="btn btn-success ">
                <i class="las la-edit"></i>
              </a>
                
                  {!! Form::open(['method'=>'delete', 'route'=>['student.destroy',$student->id]]) !!}
                  {!! Form::button('<i class="las la-times"></i>', ['type'=>'submit', 'onclick'=>'return confirm("Are you sure !")','class'=>'btn btn-danger']) !!}
                  {!! Form::close() !!}
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