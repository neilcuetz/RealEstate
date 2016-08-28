<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Requirements | Transactions</title>
    <?php
    include "../head.php";
    include "../connection/connection.php";
    include "includes/navbar.php";
    ?>
  </head>
<body>
<div class="container">
  <ol class="breadcrumb">
    	<li><a href="#">Home </a></li>
    	<li><a href="#">Client Registration </a></li>
  	<li class="active">Requirements Checking</li>
  </ol>
  <p class="bg-info bg-font">Once all requirements have been submitted, the Sales Agent shall endorse the documents
    and all other necessary requirements to the Documents and Inventory Control Department for the preparation
    of the Deed of Absolute Sale (DOAS).

    All requirements and payments must be completed within thirty (30) days. Otherwise,
    your reservation will be forfeited and cancelled. </p>

  <table id="example" class="display" cellspacing="0" width="100%">
          <thead>
              <tr>
                  <th>Customer ID </th>
                  <th>Name        </th>
                  <th>Action      </th>
                  <th>State       </th>
              </tr>
          </thead>

  					<tr>
  						<td>00001</td>
  						<td>Dummy 1 </td>
  						<td><input type="button" class="btn btn-success"
              data-toggle="modal" data-target="#myModal"
              name="checkRequirements" value="Check Requirements"></td>
              <td><span class="green-text">Complete</span></td>
  					</tr>

            <tr>
  						<td>00002</td>
  						<td>Dummy 2 </td>
  						<td><input type="button" class="btn btn-warning"
              data-toggle="modal" data-target="#myModal"
              name="checkRequirements" value="Check Requirements"></td>
              <td><span class="red-text">Pending</span></td>
  					</tr>

  			  <tbody>
  </table>
  <!--===================================
    =====================================
    =====================================
            MODAL BELOW
    =====================================
    =====================================
    =====================================-->
  <div class="form-group">
  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <!--HEADER-->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel"><h3>Review Requirements</h3></h4>
        </div>

        <form action="" method="POST">
        <!--BODY-->
        <div class="modal-body">
        <div class="row">
          <div class="col-md-5">
            <div class="checkbox">
              <label>
                <input type="checkbox" checked> Signed Reservation Agreement and Reservation Fee Receipt Signed Client Registration Form
                      Signed Computation Sheet
              </label>
            </div>
          </div>

          <div class="col-md-5">
            <div class="checkbox">
              <label>
                <input type="checkbox"> Photocopy of either Tax Identification No. (TIN) or BIR Form 1904 Photocopy of any valid
              </label>
            </div>
          </div>

          <div class="col-md-5">
            <div class="checkbox">
              <label>
                <input type="checkbox" checked> Government issued ID/s with signature.
              </label>
            </div>
          </div>

          <div class="col-md-5">
            <div class="checkbox">
              <label>
                <input type="checkbox" checked> Notarized Special Power of Attorney (SPA),
                for local accounts and Consularized SPA for international accounts (if applicable)
              </label>
            </div>
          </div>

          <div class="col-md-5">
            <div class="checkbox">
              <label>
                <input type="checkbox"> Deed of Undertaking for international accounts (if applicable)
                 Proof of Billing Address (must be the latest billing statement)
              </label>
            </div>
          </div>

        </div>
        </div>
        <!--FOOTER-->
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" name="createSubmit"class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
    </div>
  </form>


</div>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</body>
</html>
