<?php  
session_start();
if(!$_SESSION["submit"]){
  header("location: login.php");
} else {
  
}

 // 1 //
 if(isset($_POST["from_date"], $_POST["to_date"]))  
 {  
      $connection = mysqli_connect("localhost", "root", "", "pulilan");  
      $output = '';  
       $query = "  
           SELECT * FROM mainuser_acc
           WHERE date BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'  AND  brgy_location IN ('brgy_officials','executive', 'dilg' ) ORDER BY user_id ASC
      ";  
      $result = mysqli_query($connection, $query);  
      $output .= '  
           <table class="table table-bordered">  
                <tr>  
                               <th>ID</th>  
                               <th>Fullname</th>  
                                <th>Barangay Location</th>  
                               <th>Date</th>  
                </tr>  
      ';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                          <td>'. $row["user_id"] .'</td>  
                          <td>'. $row["name"] .'</td>  
                           <td>'. $row["brgy_location"] .'</td>  
                          <td>'. $row["date"] .'</td>  
                     </tr>  
                ';  
           }  
      }  
      else  
      {  
           $output .= '  
                <tr>  
                     <td colspan="5">No Results Found</td>  
                </tr>  
           ';  
      }  
      $output .= '</table>';  
      echo $output;  
 }  
 ?>
