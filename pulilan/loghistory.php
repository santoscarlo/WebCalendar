<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
require('pulilan_db_connect.php');
?>
<?php include('../pulilan/adminnav.php'); ?>

<!--******************************Content*********************************-->

	<!-- Page Header -->
	<div class="row">
		<div class="col-lg-12">
		    <h1 class="page-header">Log History</h1>
		</div>
	</div><!--End Page Header -->

	<div class="panel panel-primary col col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="panel-heading">
			<p>Log History | Barangay</p>
		</div>
		<div class="panel-body">
			<table class="col col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<thead>
					<tr class="table-bordered">
						<th>ID</th>
						<th>Username</th>
						<th>Date & Time</th>
					</tr>
				</thead>
				<?php
                                    $show_record="SELECT * FROM loghistory";
                                    $show_record_query = mysqli_query($connection, $show_record);
                      
                                    if($show_record_query){
                                    while($result = mysqli_fetch_assoc($show_record_query))

                             { 

                                 ?>
				<tbody>
					<tr>
						<td style="color: red;"><?php echo $result['log_id'];?></td>
						<td><?php echo $result['username'];?></td>
						<td><?php echo $result['datetime'];?></td>
						<td></td>
						<td></td>
					</tr>
				</tbody>
				<?php
                                }
                                }
                                    ?>
			</table>
		</div>
	</div>

	

<!--****************************End Content*******************************-->

<?php include('../pulilan/adminfooter.php'); ?>