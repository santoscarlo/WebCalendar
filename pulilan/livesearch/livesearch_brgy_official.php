<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "pulilan");


if(isset($_GET['r'])){
	$r = $_GET['r'];
	global $r;
  if(isset($_SESSION['lol'])&&!empty($_SESSION['lol'])){
                    $lol = $_SESSION['lol'];
                }
global $lol;
	if($r != ''){

$sql = mysqli_query($con, "SELECT * from brgydetails_tbl where brgy_location = '$lol' AND type = 'personnel' AND fullname like '%$r%' ");

                while($result = mysqli_fetch_array($sql))

         { 

             ?>
             <tr>
              <td style="color: red;"><?php echo $result['fullname'];?></td>
              <td><?php echo $result['email'];?></td>
              <td><?php echo $result['gender'];?></td>
              <td><?php echo $result['contact'];?></td>
              <td><?php echo $result['brgy_location'];?></td>
               <td><a href="updatebrgyofficials.php?brgydetails_id=<?php echo $result['brgydetails_id'];?>" class="btn btn-info btn-outline">Update Officials</a></td>
            </tr>
            
        <?php
}


	}
	
}


?>