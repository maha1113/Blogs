@extends('admin-dashboard.master')

@section('content')
<h2>All authers
</h2>
<div class="col-md-12">
    <div class="card">
      <div class="card-header">
        {{-- <h3 class="card-title">Simple Full Width Table</h3> --}}

        <div class="card-tools">
          <ul class="pagination pagination-sm float-right">
            <li class="page-item"><a class="page-link" href="#">«</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">»</a></li>
          </ul>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body p-0">
        <table class="table">
          <thead>
            <tr>
              <th style="width: 10px">#</th>

              <th>Name</th>
              <th>Age</th>
              <th>Image</th>
              <th>Actions</th>
              <th>Gender</th>
            </tr>
          </thead>
          <tbody>
             @foreach ($authers as $auther)
            <tr>
              <td>{{ $auther->id }}</td>
              <td>{{ $auther->name }}</td>
              <td>{{ $auther->age }}</td>
              <td>{{ $auther->gender }}</td>
              <td> <img width="100px" src= "{{ asset( 'storage/' . $auther->image ) }}"  alt="image"> </td>
              {{-- <td>{{ $auther->action }}</td> --}}
              <td><a href={{ $auther->action }} btn btn-primary btn-sm><i class="fas fa-edit"></a></i>
                <a href="#" btn btn-danger btn-sm><i class="fas fa-trash"></i> </a>
               </td>
                @endforeach
            </tr>

          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->


    <!-- /.card -->
  </div>
@endsection
