<?php  
$connect = mysqli_connect("localhost", "root", "", "pulilan");  


 $d1 = $_POST['from_date'];
 $d2 = $_POST['to_date'];

 $query1 = "SELECT * FROM mainuser_acc WHERE date BETWEEN '".$d1."' AND '".$d2."' ";
 $result1 =mysqli_query($connect, $query1);
 while($result = mysqli_fetch_assoc($result1)){

 ?>

    <tr>
    <td> <?php echo $result["name"];?></td>
    <td> <?php echo $result["gender"];?></td>
    <td> <?php echo $result["position"];?></td>
    <td> <?php echo $result["brgy_location"];?></td>
    <td> <?php echo $result["date"];?></td>
    <td><input type="button" value="<?php echo $result['user_id']; ?>"
onclick="window.open('final_report.php')"></td>
    </tr>
                

<?php

}
 ?>  
 