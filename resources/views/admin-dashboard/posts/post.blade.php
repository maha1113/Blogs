@extends('admin-dashboard.master')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Quick Example</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('postss') }}" method="post" enctype="multipart/form-data">
            @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputtitle">TITLE</label>
              <input type="text" class="form-control" name="title"  id="exampleInputtitle" placeholder="title">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">DESCRIPTION</label>
              <input type="text" class="form-control" name="desc" id="exampleInputPassword1" placeholder="DESCRIPTION">
            </div>
            <label>AUTHERS</label>
            <div class="form-group">
                <div class="form-group">


            <select class="custom-select" name="auther_id">
                @foreach ($authers as $auther)
                <option value={{ $auther->id }}>{{ $auther->name }}</option>
              @endforeach

              </select>
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
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
</body>
</html>
@endsection
