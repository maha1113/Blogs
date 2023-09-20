<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>authers :</h3>
    @foreach ($authers as $auther)
  <p>my name is  {{ $auther->name }} my age is {{ $auther->age }}</p>
    <br>
    <h3>posts :</h3>
     @foreach ($auther->posts as $post)
        my posts  {{ $post->title }} , description about my posts  {{ $post->description }}
         <br>
         <h3>comments :</h3>
         @foreach ($post->comments as $comment)
            the comments  {{ $comment->title }} , description about my comments {{ $comment->description }}
             <br>
         @endforeach
     @endforeach
    @endforeach
</body>
</html>
