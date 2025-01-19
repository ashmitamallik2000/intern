<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <form action="{{route('register.update',$register)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label>First Name</label>
        <input type="text" id="fname" name="fname" required value="{{old('fname',$register->fname)}}">
        <label>Last Name</label>
        <input type="text" id="lname" name="lname" required value="{{old('lname',$register->lname)}}">
        <label>Email</label>
        <input type="email" id="email" name="email" required value="{{old('lname',$register->email)}}">
        <label>Password</label>
        <input type="password" id="password" name="password" required value="{{old('password',$register->password)}}">
        <button class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>