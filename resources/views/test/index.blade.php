<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>test</title>
</head>
<body>
<p>test</p>
{{$name}}
<form method="POST" action="/profile">
    {{ csrf_field() }}


</form>

</body>
</html>