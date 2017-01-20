<?php
$companies=$data;
$sEmail=$email;
$sgpa=$gpa;
$sdescription=$description;

?>

<html>
<head>

<title>Company Details</title>
</head>

<body>
<div class="clear">
    {{$email}}<br>
   {{$gpa}}<br>
    {{$description}}<br>
</div>

<form action='{{route('checked')}}' method="post">

<?php foreach($companies as $current): ?>
    <?php $myarray = array();
    ?>
	<div class="col-md-4">
    	<ul class="list-group">  
        <input type="checkbox" name="check_list[]" value=<?php echo $current->company_name; ?>> <?php echo $current->company_name; ?><br>
		 
    	</ul>
    </div>
<?php endforeach; ?>
<input type="hidden" name="_token" value = "{{Session::token()}}">
    <input type="hidden" name="student_id" value = "{{$student_id}}">

 <input type="submit" value="Click">
</form>
</body>

</html>