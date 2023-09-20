@extends('admin-dashboard.master')

@section('content')


<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">To Do List</h3>
    </div>
<form action="{{ route('store.list') }}" method="post" enctype="multipart/form-data">
    @csrf
  <div class="card-body">
    <div class="form-group">
      <label for="exampleInputtitle">Title</label>
      <input type="text" class="form-control" name="title"  id="exampleInputtitle" placeholder="title">
    </div>
    @error('title')

<p class="text-danger">{{ $message }}</p>
    @enderror
    <div class="form-group">
      <label for="exampleInputPassword1">Desc</label>
      <input type="text" class="form-control" name="desc" id="exampleInputPassword1" placeholder="title">
    </div>
    @error('desc')
        <p class="text-danger">{{ $message }}</p>
    @enderror
    <div class="form-group">
        <label for="exampleInputPassword1">Date</label>
        <input type="date" class="form-control" name="date" id="exampleInputPassword1" placeholder="D">
      </div>
      @error('date')
          <p class="text-danger">{{ $message }}</p>
      @enderror

    <div class="form-group">
      {{-- <label for="exampleInputimage">IMAGE</label>
      <div class="input-group">
        <div class="custom-file">
          <input type="file" class="custom-file-input" name="image" id="exampleInputFile">
          <label class="custom-file-label" for="exampleInputFile">Choose image</label>
        </div> --}}
        {{-- <div class="input-group-append">
          <span class="input-group-text">Upload</span>
        </div> --}}
      </div>
    </div>

  </div>
  <!-- /.card-body -->

  <div class="card-footer">
    <button type="submit" class="btn btn-primary">Create List</button>
  </div>
</form>









@endsection
