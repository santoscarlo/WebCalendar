<?php  
$connect = mysqli_connect("localhost", "root", "", "pulilan");  


 $d1 = $_POST['from_date'];
 $d2 = $_POST['to_date'];
 echo 'zedek';
/*
 $query1 = "SELECT * FROM mainuser_acc WHERE date BETWEEN '".$d1."' AND '".$d2."' ";
 $result1 =mysqli_query($connect, $query1);
 while($date = mysqli_fetch_assoc($result1)){

 ?>

    <tr>
    <td> <?php echo $date["customer_event_id"];?></td>
    <td> <?php echo $date["event_name"];?></td>
    <td> <?php echo $date["customer_package"];?></td>
    <td> <?php echo $date["payment_price"];?></td>
    <td> <?php echo $date["date_payment"];?></td>

    </tr>
                



 


  <?php
}
  $query2 = "SELECT SUM(payment_price) as sum FROM tbl_customer_event WHERE date_payment BETWEEN '".$d1."' AND '".$d2."' ";
 $result2 =mysqli_query($connect, $query2);
 while($sum = mysqli_fetch_assoc($result2)){
  ?>
  <td>Total Cost: </td>
  <td></td>
  <td></td>
  <td><?php echo $sum['sum']; ?></td>

<?php

}*/

 ?>  
