<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
</head>
<body style="background: #0a0a0a;color: white">
    @if($user)
        <p>Name:{{$user->name}}</p>
        <p>Email:{{$user->email}}</p>
        <p>Password:{{$user->password}}</p>
    @else
        <p>NO user found by this email</p>
    @endif
</body>
</html>
