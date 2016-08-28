<!DOCTYPE html>
<html lang="en">
<head>

	<title>PDF Stuff</title>
	<meta charset="UTF-8">
	<?php 
	include "../head.php";
	include "../connection/connection.php";
	include "includes/navbar.php";
	?>
</head>
<body>
<div class="container center">

<ol class="breadcrumb">
  	<li><a href="#">Home </a></li>
  	<li><a href="#">Client Registration </a></li>
	<li class="active">Customer Table</li>
</ol>

<table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Customer ID</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
		<?php
			$sql = $db->prepare("SELECT * from crf");
			$sql->execute();	
				while($result = $sql->fetch(PDO::FETCH_ASSOC))
				{
					$idd = $result['col_ID'];
					echo " 
					<tr>
						<td>".$result['col_ID']."</td>
						<td>".$result['col_fn']." ".$result['col_ln']."</td>
						<td><a href='viewCrf.php?idd=".$idd."' type='button' 
						value='View PDF'class='btn btn-primary'
						target='_blank'>View PDF</a>
						</td>
					</tr>
					";
				}?>		
        <tbody>        
</table>            
<div>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );


</script>


</body>
</html>