<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- PLEASE MAKE A TABLE WITH ALL CATEGORIES --}}
    <table>
    @foreach ($categories as $cat)
        <TR>
            <TD>{{$cat->name}}</TD>
            <TD>{{$cat->slug}}</TD>
            <TD>{{$cat->description}}</TD>
        </TR>
    @endforeach
    </table>
    <h1>Example form to process example-post routing </h1>
    <form action="/example-post" method="POST">
        @csrf

        <label for="name">name</label>
        <input id="name" name="name" type="text">
        <label>slug<input name="slug" type="text"></label>
        <label>description<input name="description"
            type="text"></label>

            <button type="submit">Send</button>

    </form>
</body>
</html>
