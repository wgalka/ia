<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   </head>
<body>




     <form action="/category" method="POST">
        @csrf

        <label for="name">name</label>
        <input name="name" id="name" value="{{old('name')}}"  type="text"><br>

        <label for="slug">slug</label>
        <input name="slug" id="slug" value="{{old('slug')}}" type="text"><br>

        <label for="description">description</label>
        <input name="description" id="description" value="{{old('description')}}" type="text"><br>

        <button type="submit">Send</button>

    </form>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


</body>
</html>
