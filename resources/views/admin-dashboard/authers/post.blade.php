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
        <form action="{{ route('store.auther') }}" method="post" enctype="multipart/form-data">
            @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputtitle">Name</label>
              <input type="text" class="form-control" name="name"  id="exampleInputtitle" placeholder="title">
            </div>
            @error('name')

            <p class="text-danger">{{ $message }}</p>
            @enderror
            <div class="form-group">
              <label for="exampleInputPassword1">age</label>
              <input type="number" class="form-control" name="age" id="exampleInputPassword1" placeholder="age">
            </div>
            @error('age')
                <p class="text-danger">{{ $message }}</p>
            @enderror

            <div class="form-group">
              <label for="exampleInputimage">image</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="image" id="exampleInputFile">

                  <label class="custom-file-label" for="exampleInputFile">Choose image</label>
                </div>
               @if ($errors->has('image'))

               <p class="text-danger">{{ $errors->first('image') }}</p>
               @endif

                <div class="input-group-append">
                  <span class="input-group-text">Upload</span>
                </div>
              </div>
            </div>

            <div class="form-group">
                <label for="exampleInputimage">Gender :</label> <br>
                <input type="radio" name="gender" value="male"> Male
                <input type="radio" name="gender" value="female"> Female
              </div>
              @error('gender')
                  <p class="text-danger">{{ $message }}</p>
              @enderror

          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Create Auther</button>
          </div>
        </form>
      </div>
</body>
</html>
@endsection
