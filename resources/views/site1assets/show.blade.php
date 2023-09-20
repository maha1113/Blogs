<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <a href="{{ route('create.contact') }}"> <h1> post and comments</h1></a>

    <h3>{{ $post->title }}</h3>
    <h3>{{ $post->description }}</h3>
    <h3>{{ $post->image }}</h3>

    @foreach ($comments as $comment)
        <h4>{{ $comment->title }}</h4>
        <h4>{{ $comments->description }}</h4>
    @endforeach

</body>
</html>


