
<?php
$studentList=$data;

?>

<html>
<head>
<title>Admin Dashboard</title>

   <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>

</head>
<body>


<?php foreach($studentList as $currentstudent): ?>
	<div class="col-md-4">
    	<ul class="list-group">
        
        <?php $id= $currentstudent->index_no;?>
       <div id="repeat">
           <a href="/studentCompany/{{$id}}"><?php echo $id; str_repeat('&nbsp;', 3); echo $currentstudent->username; ?></a>
		</div>   
    	</ul>
    </div>
<?php endforeach; ?>



<script>

{{--/*$(document).ready(function(){--}}
	 {{--var idT = <?php echo json_encode($id); ?>;--}}
	{{----}}
	{{--var url = '{{URL::route('studentCompany/{$id}', ['id'=>'datareplace'])}}';--}}
	{{--url = url.replace('datareplace', idT);--}}

	{{--$("#repeat").append('<a href="'+url+'"><?php echo $id; ?></a>');--}}
	 {{----}}
    {{----}}
	{{--}--}}
      {{----}}
		{{----}}
       {{--});--}}
   {{--*/--}}

</script>




</body>



</html>