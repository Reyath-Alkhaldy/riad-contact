<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact </title>
</head>
<body>
<form action="{{route("contact")}}" method="post"  style="display: block ;padding: 20px; background-color: gray">
    @csrf
    <input type="text" name="name" placeholder="name" style="display: block ;padding: 20px; margin: 5px; " />
    <input type="email" name="email" placeholder="email" style="display: block ;padding: 20px; margin: 5px;  " />
    <textarea  name="message" placeholder="message" style="display: block ;padding: 20px;margin: 5px; " >hillo</textarea>
    <button type="submit" value="submit"     style=" padding: 20px; color: black ;margin: 5px; "/>
</form>
</body>
</html>
