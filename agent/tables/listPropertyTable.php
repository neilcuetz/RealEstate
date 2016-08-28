<table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Property ID</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
          /*  $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $sql = $db->prepare("SELECT * FROM `tblProperty`");
            $sql->execute();
                while($result = $sql->fetch(PDO::FETCH_ASSOC))
                {
                    $id                 = $result['ID'];
                    $description        = $result['Description'];
                    $paymentOpt         = $result['paymentOpt'];
                    $totalPrice         = $result['totalPrice'];

                    echo"
                    <tr>
                        <td>$id</td>
                        <td>
                        <input class='btn btn-default' onmouseover='preview($totalPrice,\"$paymentOpt\",\"$description\");'   type='button' value='More'>
                        <a href="crf.php?propertyID=$propertyID" class='btn btn-default'> Reserve </a>
                        </td>
                    </tr>
                    ";
                }
         */?>
        </tbody>
</table>



<script>
 function   preview(totalPrice,payOpt,desc){

$("#totalPrice").val(totalPrice)  ;
$("#propDesc").val(desc);
$("#paymentOpt").val(payOpt);
 }


</script>
