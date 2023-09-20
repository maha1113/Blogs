@extends('admin-dashboard.master')

@section('content')
<h2>All abouts
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
              <th>Image</th>
              <th>title</th>
              <th>sub_title</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
             @foreach ($abouts as $about)
            <tr>
              <td>{{ $about->id }}</td>
              <td> <img width="100px" src= "{{ asset( 'storage/' . $about->image ) }}"  alt="image"> </td>
              <td>{{ $about->title }}</td>
              <td>{{ $about->sub_title }}</td>
              <td><a href={{ $about->action }}  btn btn-primary btn-sm><i class="fas fa-edit "></a></i>
               <a href= btn btn-danger btn-sm><i class="fas fa-trash"></i> </a>
              </td>
            </tr>
                @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->

    </div>
    <!-- /.card -->


    <!-- /.card -->

  </div>

@endsection
