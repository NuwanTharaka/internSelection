<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SignIn</title>
</head>
<body>

<form action='{{route('Data')}}' method="post">
    <div class="clear">
        <input type="submit" value="Click">
    </div>
    <input type="hidden" name="_token" value = "{{Session::token()}}">

</form>



</body>
</html>
