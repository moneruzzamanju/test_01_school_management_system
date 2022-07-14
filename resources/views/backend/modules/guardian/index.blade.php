@extends('backend.layout.master')

@section('content')
<div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">All Guardian Page</h3>

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
              <th>Fathers Name</th>
              <th>Fathers Phone</th>
              <th>Fathers Occupation</th>
              <th>Fathers Photo</th>
              <th>Mothers Name</th>
              <th>Mothers Phone</th>
              <th>Mothers Occupation</th>
              {{-- <th>Mothers Photo</th> --}}
              <th>Office Phone</th>
              <th>Email</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($guardians as $guardian)
            <tr>
              <td>{{ $guardian->id }}</td>
              <td>{{ $guardian->father_name }}</td>
              <td>{{ $guardian->father_phone_no }}</td>
              <td>{{ $guardian->father_occupation }}</td>
              {{-- <td>{{ $guardian->father_photo }}</td> --}}
              <td><img src="{{$guardian->father_photo }}" style="max-width: 75px;max-height: 75px;margin-top: 10px" alt="Photo"></td>


              <td>{{ $guardian->mother_name }}</td>
              <td>{{ $guardian->mother_phone_no }}</td>
              <td>{{ $guardian->mother_occupation }}</td>
              {{-- <td>{{ $guardian->mother_photo }}</td> --}}

              <td>{{ $guardian->office_phone }}</td>
              <td>{{ $guardian->email }}</td>
              <td>{{ $guardian->status }}</td>

              <td class="d-flex justify">
                <a href="{{ route('guardian.show',$guardian->id) }}" 
                class="btn btn-info update_product_form">
                <i class="las la-info"></i>
              </a>
                <a href="{{ route('guardian.edit',$guardian->id) }}" 
                class="btn btn-success update_product_form">
                <i class="las la-edit"></i>
              </a>
                
                  {!! Form::open(['method'=>'delete', 'route'=>['guardian.destroy',$guardian->id]]) !!}
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