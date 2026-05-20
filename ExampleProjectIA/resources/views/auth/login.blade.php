<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form method="POST" action="/auth/login">
        @csrf
        <label>email:<input name="email" type="text" value="{{old('email')}}"></label><br>
        @if ($errors->first('email')) <p>Wrong email</p>@endif
        <label>password:<input name="password" type="password" value="{{old('password')}}"></label>
        @if ($errors->first('password')) <p>Wrong password</p>@endif
        <button type="submit">Login</button>
    </form>

    <p>Dont have acoount? <a href="/auth/register">Register here</a></p>

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
