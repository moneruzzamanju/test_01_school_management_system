@extends('backend.layout.master')

@section('content')
<div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">All Teacher Page</h3>

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
              <th>Action</th>
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
              <td><img src="{{$teacher->photo }}" style="max-width: 75px;max-height: 75px;margin-top: 10px" alt="Photo"></td>
              <td>{{ $teacher->status }}</td>

              <td class="d-flex justify">
                <a href="{{ route('teacher.show',$teacher->id) }}" 
                class="btn btn-info update_product_form">
                <i class="las la-info"></i>
              </a>
                <a href="{{ route('teacher.edit',$teacher->id) }}" 
                class="btn btn-success update_product_form">
                <i class="las la-edit"></i>
              </a>
                
                  {!! Form::open(['method'=>'delete', 'route'=>['teacher.destroy',$teacher->id]]) !!}
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