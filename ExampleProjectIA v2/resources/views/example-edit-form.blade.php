<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

     <form action="/example-update/{{$category->id}}" method="POST">
        @csrf
        @method("PUT")

        <label for="name">name</label>
        <input id="name" name="name" type="text" value="{{$category->name}}">
        <label>slug<input value="{{$category->slug}}" name="slug" type="text"></label>
        <label>description<input value="{{$category->description}}" name="description" type="text"></label>

        <button type="submit">Send</button>

    </form>
</body>
</html>
