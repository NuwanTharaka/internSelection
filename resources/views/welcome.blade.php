<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        
    </head>
    <body>
        <div class="flex-center position-ref full-height">
      <form action='{{route('RegisterStudent')}}' method="post">
<fieldset >
<legend>Register</legend>
<label for='Index_no' >Index_no*: </label>
<input type='text' name='Index_no' id='Index_no' maxlength="50" />
<label for='email' >Email Address*:</label>
<input type='text' name='email' id='email' maxlength="50" />

<label for='username' >UserName*:</label>
<input type='text' name='username' id='username' maxlength="50" />
<input type="hidden" name="_token" value = "{{Session::token()}}">
<label for='password' >Password*:</label>
<input type='password' name='password' id='password' maxlength="50" />
<input type='submit' name='Submit' value='Submit' />

</fieldset>
</form>


      <form action='{{route('RegisterCoordinator')}}' method="post">
<fieldset >
<legend>Register Coordinator</legend>
<label for='Index_no' >Index_no*: </label>
<input type='text' name='Index_no' id='Index_no' maxlength="50" />
<label for='email' >Email Address*:</label>
<input type='text' name='email' id='email' maxlength="50" />
<label for='Company_Name' >Company_Name*:</label>
<input type='text' name='Company_Name' id='Company_Name' maxlength="50" />

<label for='username' >UserName*:</label>
<input type='text' name='username' id='username' maxlength="50" />
<input type="hidden" name="_token" value = "{{Session::token()}}">
<label for='password' >Password*:</label>
<input type='password' name='password' id='password' maxlength="50" />
<input type='submit' name='Submit' value='Submit' />

</fieldset>	
</form>
        </div>
    </body>
</html>
