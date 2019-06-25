<?php

$con = mysqli_connect("localhost", "root", "", "pulilan");


if(isset($_GET['r'])){
	$r = $_GET['r'];
	global $r;

	if($r == ""){

$sql = mysqli_query($con, "SELECT * from resident_q where name like '%$r%' && type = 'resident' && visibility = '0' OR brgy_location like '%$r%' && type = 'resident' && visibility = '0' limit 0, 10");

                while($row = mysqli_fetch_array($sql));

         { 

             ?>
              <tr>
               <td><?php echo $row['user_id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['position']; ?></td>
            <td><?php echo $row['brgy_location'] ?></td>
           <td>
                <a href="residentanswer.php?user_id=<?php echo $row['user_id']; ?>" class="btn btn-outline btn-info fa fa-profile">  View  Answer</a>
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
               <td><?php echo $result['user_id']; ?></td>
            <td><?php echo $result['name']; ?></td>
            <td><?php echo $result['position']; ?></td>
            <td><?php echo $result['brgy_location'] ?></td>
           
             
              <td>
                <a href="residentanswer.php?user_id=<?php echo $result['user_id'];?>" class="btn btn-outline btn-info fa fa-profile">  View  Answer</a>
            </td>
           
            <tr>
        <?php
}
	}
}


?>