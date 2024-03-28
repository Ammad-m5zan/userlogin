<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <main>
        <form action="{{ route('auth.login') }}" method="POST">
            @csrf
            {{-- @dd(request()->session()) --}}
            <div>                
                <label for="email">Email: </label>
                <input type="email" name="email">
                @if ($errors->has('email'))
                    <span>Email is required</span>
                @endif
            </div>
            <div>                
                <label for="password">password: </label>
                <input type="password" name="password">
                @if ($errors->has('password'))
                <span>password is required</span>
                @endif
            </div>
            <button type="submit">login</button>
        </form>
    </main>
</body>
</html>