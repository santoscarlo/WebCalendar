<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "pulilan");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM mainuser_acc 
  WHERE name LIKE '%".$search."%'
  OR position LIKE '%".$search."%' 
  OR date LIKE '%".$search."%' 
 ";
}
else
{
 $query = "
SELECT * FROM mainuser_acc WHERE name  ORDER BY user_id ASC
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
    
                              <th>Full Name</th>  
                               <th>Gender</th>
                               <th>Position</th>
                               <th>Barangay Location</th>
                               <th>Date</th>  
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
                           <td>'. $row["name"] .'</td>  
                          <td>'. $row["gender"] .'</td>  
                          <td>'. $row["position"] .'</td>  
                          <td> '. $row["brgy_location"] .'</td>  
                          <td>'. $row["date"] .'</td>  
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>