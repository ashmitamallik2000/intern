<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="container">
        @if(session()->has('error'))
        {{ session()->get('error')}}
        @endif
        <form action="{{ route('login.submit') }}"  method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email"  id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password"  id="password" name="password" required>
            </div>
           <button class="btn btn-primary">Login</button>
           <a href="{{route('register.index')}}">Registration</a>

        </form>
    </div>
    
</body>
</html>