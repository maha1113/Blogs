@extends('admin-dashboard.master')

@section('content')

<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Quick Example</h3>
    </div>
<form action="{{ route('create.about') }}" method="post" enctype="multipart/form-data">
    @csrf
  <div class="card-body">
    <div class="form-group">
      <label for="exampleInputtitle">Title</label>
      <input type="text" class="form-control" name="title"  id="exampleInputtitle" placeholder="title">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Sub_Title</label>
      <input type="text" class="form-control" name="subtitle" id="exampleInputPassword1" placeholder="title">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">desc</label>
        <input type="text" class="form-control" name="desc" id="exampleInputPassword1" placeholder="DESCRIPTION">
      </div>

    <div class="form-group">
      <label for="exampleInputimage">IMAGE</label>
      <div class="input-group">
        <div class="custom-file">
          <input type="file" class="custom-file-input" name="image" id="exampleInputFile">
          <label class="custom-file-label" for="exampleInputFile">Choose image</label>
        </div>
        <div class="input-group-append">
          <span class="input-group-text">Upload</span>
        </div>
      </div>
    </div>

  </div>
  <!-- /.card-body -->

  <div class="card-footer">
    <button type="submit" class="btn btn-primary">Create About</button>
  </div>
</form>



@endsection
