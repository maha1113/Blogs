@extends('admin-dashboard.master')

@section('content')


<h2>All Lists
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


              <th>Title</th>
              <th>Desc</th>
              <th>Date</th>
              <th>Delete</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
             @foreach ($dolists as $dolist)
            <tr>
              <td>{{ $dolist->id }}</td>
              <td>{{ $dolist->title }}</td>
              <td>{{ $dolist->desc }}</td>
              <td>{{ $dolist->date }}</td>
              <td>{{ $dolist->delete }}</td>
              <td>{{ $dolist->status ? 'فعال' : 'غير فعال'  }}</td>
          <td>
              <form action="{{ route('delete.list', $dolist->id) }}" method="post">
            @csrf
            @method('delete')
            <button  btn btn-danger btn-sm><i class="fas fa-trash"></i></button>
        </form>
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
