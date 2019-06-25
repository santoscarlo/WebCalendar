<?php

$con = mysqli_connect("localhost", "root", "", "pulilan");


if(isset($_GET['r'])){
	$r = $_GET['r'];
	global $r;

	if($r == ""){

$sql = mysqli_query($con, "SELECT * from mainuser_acc where name like '%$r%' && type = 'official' && visibility = '0' || brgy_location like '%$r%' && type = 'official' && visibility = '0' limit 0, 10");

                while($result = mysqli_fetch_array($sql))

         { 

             ?>
              <tr>
              <td style="color: red;"><?php echo $result['user_id'];?></td>
              <td><?php echo $result['brgy_location'];?></td>
              <td><?php echo $result['name'];?></td>
              <td><?php echo $result['gender'];?></td>
              <td><?php echo $result['username'];?></td>
              <td><?php echo $result['type'];?></td>
              <td>
                <a class="btn btn-outline btn-info fa fa-pencil-square-o" href="updateresidentregistration.php?user_id=<?php echo $result['user_id'];?>"></a>
              </td>

              <td>
               <a type="button" href="delete_acc.php?user_id=<?php echo $result['user_id']; ?>" class="btn btn-outline btn-danger fa fa-times" <?php
             if($result['edit_status'] == "approve"){
                    ?>
                    disabled
                    <?php
                }

             ?>></a>
             </td>
            <tr>
        <?php
}


	}
	else{
	
					$sql = mysqli_query($con, "SELECT * from resident_q where name like '%$r%' && type = 'resident' && visibility = '0' || brgy_location like '%$r%' && type = 'resident' && visibility = '0'");

                while($result = mysqli_fetch_array($sql))

         { 

             ?>
              <tr>
              <td style="color: red;"><?php echo $result['user_id'];?></td>
              <td><?php echo $result['brgy_location'];?></td>
              <td><?php echo $result['name'];?></td>
              <td><?php echo $result['position'];?></td>
              <td><?php echo $result['type'];?></td>
              <td>
                <a class="btn btn-outline btn-info fa fa-pencil-square-o" href="updateresidentregistration.php?user_id=<?php echo $result['user_id'];?>"></a>
              </td>

              <td>
               <a type="button" href="delete_acc.php?user_id=<?php echo $result['user_id']; ?>" class="btn btn-outline btn-danger fa fa-times" <?php
             if($result['edit_status'] == "approve"){
                    ?>
                    disabled
                    <?php
                }

             ?>></a>
             </td>
            <tr>
        <?php
}
	}
}


?>