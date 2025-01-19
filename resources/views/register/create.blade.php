<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <form action="{{route('register.store')}}" method="Post">
            @csrf
            
        <label>First Name</label>
        <input type="text" id="fname" name="fname" required>
        <label>Last Name</label>
        <input type="text" id="lname" name="lname" required>
        <label>Email</label>
        <input type="email" id="email" name="email" required>
        <label>Password</label>
        <input type="password" id="password" name="password" required>
        
        <button class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>