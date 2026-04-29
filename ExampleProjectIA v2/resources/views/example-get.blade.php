<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table,
        th,
        td {
            border: 2px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    {{-- PLEASE MAKE A TABLE WITH ALL CATEGORIES --}}
    <table>
        <tr>
            <th>Name</th>
            <th>Slug</th>
            <th>Description</th>
        </tr>
        @foreach ($categories as $cat)
            <TR>
                <TD>{{ $cat->name }}</TD>
                <TD>{{ $cat->slug }}</TD>
                <TD>{{ $cat->description }}</TD>
                <td>
                    <a href="/example-get/{{$cat->id}}/edit">Update</a>

                </td>

                {{-- How create new column? --}}
                <td>
                    <form action="/example-delete/{{$cat->id}}" method="POST">
                        @csrf
                        @method("DELETE")

                        <button type="submit">delete</button>
                    </form>
                </td>
            </TR>
        @endforeach
    </table>
    <h1>Example form to process example-post routing </h1>
    <form action="/example-post" method="POST">
        @csrf

        <label for="name">name</label>
        <input id="name" name="name" type="text">
        <label>slug<input name="slug" type="text"></label>
        <label>description<input name="description" type="text"></label>

        <button type="submit">Send</button>

    </form>
</body>

</html>
