<?php  
session_start();
error_reporting();
$connect = mysqli_connect("localhost", "root", "", "pulilan");  
 $query = "SELECT * FROM mainuser_acc  ORDER BY name ASC";  
 $result = mysqli_query($connect, $query);  
 ?>
 <?php include('../pulilan/adminnav.php'); ?>

                <!-- Page Header -->
  <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header">History of Final Report</h1>
      </div>
  </div><!--End Page Header -->

              <form method="POST" action="final_report.php">
              
                <label>Select Year</label>

                <select class="form-control" name="year" id="year" datCivil Registrara-placement="right" required="true">
                  <option value=""> --Select Year-- </option>
                  <option value="2017">2017</option>
                  <option value="2018">2018</option>
                  <option value="2019">2019</option>
                </select>

                <br />

                <center><input type="submit" name="filter" id="filter" value="Filter" class="btn btn-info"  /></center>

              </form>
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
                          url:"filter.php",  
                          method:"POST",  
                          data:{from_date:from_date, to_date:to_date},  
                         
                          success:function(data)  
                          {  
                               $('#tbl_customer_event').html(data);  
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

<?php include('../pulilan/adminfooter.php'); ?>