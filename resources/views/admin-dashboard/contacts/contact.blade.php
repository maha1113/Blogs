@extends('admin-dashboard.master')

@section('content')
<h2>All Contacts
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
              <th>Email</th>
              <th>Phone</th>
              <th>Message</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($contacts as $contact)
            <tr>
                <td>{{ $contact->id }}</td>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->phone }}</td>
                <td>{{ $contact->message }}</td>
                <td><a href={{ $contact->action }} btn btn-primary btn-sm><i class="fas fa-edit "></a></i>
                    <form action="{{ route('action/destroy', $contact->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button  btn btn-danger btn-sm><i class="fas fa-trash"></i></button>
                   </td>
                    </form>
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
