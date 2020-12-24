<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="">About</a>
    <a href="">contact</a>
    <a href="">Home</a>
<h1>Hello Sage from Laravel, Home Page</h1>
<form method="post" action="store-user">
    @csrf
    <input type="text" name="name" placeholder="Enter Your Name"/>
    <input type="text" name="email" placeholder="Enter Your Email"/>
    <input type="submit" />
</form>
</body>
</html>