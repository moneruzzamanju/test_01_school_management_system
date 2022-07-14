@extends('backend.layout.master')

@section('content')
<div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">All Subjects </h3>

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
              <th>Subject Name</th>
              <th>Subject Description</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($subjects as $subject)
            <tr>
              <td>{{ $subject->id }}</td>
              <td>{{ $subject->name }}</td>
              <td>{{ $subject->description }}</td>
              <td class="d-flex justify">
                  <a href="{{ route('subject.show',$subject->id) }}" 
                  class="btn btn-info update_product_form">
                  <i class="las la-info"></i>
                </a>
                  <a href="{{ route('subject.edit',$subject->id) }}" 
                  class="btn btn-success update_product_form">
                  <i class="las la-edit"></i>
                </a>
                  
                    {!! Form::open(['method'=>'delete', 'route'=>['subject.destroy',$subject->id]]) !!}
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