<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action={{route('Upload')}} enctype="multipart/form-data" method="POST">
<input type="file" name='video'>
<input type=submit value="upload">
</form>
</body>
</html>
