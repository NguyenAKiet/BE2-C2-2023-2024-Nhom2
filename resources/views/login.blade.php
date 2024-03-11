<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="demo" method="post">
        @csrf
        <label for="admin">User</label>
        <input type="text" name="user" style="width:100px">
        <label for="password">Password</label>
        <input type="password" name="password" style="width:100px">
        <button type="submit">Send</button>
    </form>
</body>
</html>