<?php
session_start();

$connection = mysqli_connect("localhost", "root", "", "pulilan");
$query = "SELECT * FROM mainuser_acc where type IN ('brgy_official','executive','dilg') ORDER BY user_id ASC";
$result = mysqli_query($connection, $query);


?>
<script> // Print
function printpage() {

    //Get the print button and put it into a variable
    var printButton = document.getElementById("printpagebutton");
    var filter = document.getElementById("filter");
  

    //Set the button visibility to 'hidden' 
    printButton.style.visibility = 'hidden';
     filter.style.visibility = 'hidden';
   
    //Print the page content
    window.print()

    //Restore button visibility
    printButton.style.visibility = 'visible';
     filter.style.visibility = 'visible';
}

</script>
        <script src="../js/jquery-ui.js"></script>  
           <link rel="stylesheet" href="../css/jquery-ui.css">  
      
           <div class="container">  
           <div class="jumbotron" style="background: white;">


<img class="imagelogo_" src="img/sample.png"  />
<br />
                <form class="form-inline">
  <label>FROM</label>
     <input type="date" name="from_date" id="from_date" class="form-control" placeholder="From Date" />  

  <label>TO</label>
   <input type="date" name="to_date" id="to_date" class="form-control" placeholder="To Date" />



    <label class="form-check-label">
        <input type="button" name="filter" id="filter" value="Filter" class="btn btn-default" />  
    </label>


</form>
                
                 <div class="col-md-1 pull-right">  
                   <a class="btn btn-default" id="printpagebutton" onclick="printpage()">Print this page</a>
                </div> 

<br />
   <div class="col-md-9">  
     <legend>Barangay Monitoring List Report</legend>
</div> 
   
                <div id="brgy_table">  
               
                     <table class="table table-bordered">  
                          <tr>  
                               <th>ID</th>  
                               <th>Fullname</th>
                               <th>Barangay Location</th>  
                               <th>Date</th>  
                          </tr>  
                     <?php  
                     while($row = mysqli_fetch_array($result))  
                     {  
                     ?>  
                          <tr>  
                               <td><?php echo $row["user_id"]; ?></td>  
                               <td><?php echo $row["name"]; ?></td>  
                                <td><?php echo $row["brgy_location"]; ?></td> 
                                <td><?php echo $row["date"]; ?></td>   
                          </tr>  
                     <?php  
                     }  
                     ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
      $(document).ready(function(){  
           $.datepicker.setDefaults({  
                dateFormat: 'yy-mm-dd'   
           });  
           $(function(){  
                $("#from_date").datepicker();  
                $("#to_date").datepicker();  
           });  
           $('#filter').click(function(){  
                var from_date = $('#from_date').val();  
                var to_date = $('#to_date').val();  
                if(from_date != '' && to_date != '')  
                {  
                     $.ajax({  
                          url:"brgyfilter.php",  
                          method:"POST",  
                          data:{from_date:from_date, to_date:to_date},  
                          success:function(data)  
                          {  
                               $('#brgy_table').html(data);  
                          }  
                     });  
                }  
                else  
                {  
                     alert("Please Select Date");  
                }  
           });  
      });  
 </script>