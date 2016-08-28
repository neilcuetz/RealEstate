<!DOCTYPE html>
<html lang="en">
<head>

	<title>List of Property | Transactions</title>
	<meta charset="UTF-8">
	<?php
	include "../connection/connection.php";
	include "../head.php";

	?>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-8">
<ol class="breadcrumb">
  	<li class="active">List of Property</li>
</ol>
</div>
</div>
<div class="col-md-5">
	<?php include "tables/listPropertyTable.php"; ?>
</div>

<div class="col-md-3">
	<div class="panel panel-default">
  <div class="panel-body">
	<h4>Preview</h4>

	<div class="row"><b>Description</b></div>
	<div class="row">
		<input class="form-control" id="propDesc" type="text" placeholder="Description" disabled>
	</div>


	<div class="row"><b>Payment Option</b></div>
	<div class="row">
		<input class="form-control" id="paymentOpt" type="text" placeholder="Payment Option" disabled>
	</div>

	<div class="row"><b>Total Price</b></div>
	<div class="row">
	<div class="input-group">
	    <span class="input-group-addon">₱</span>
		<input class="form-control" id="totalPrice" type="text" placeholder="Total Price" disabled>
	</div>
	</div>
  </div>
</div>
</div>

</div>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );


</script>


</body>
</html>
