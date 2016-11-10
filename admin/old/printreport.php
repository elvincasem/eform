<?php
include('include/functions.php');
$reportid = $_GET['reportid'];


?>
<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	 <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

	
	<!-- DataTables CSS -->
    <link href="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
	
    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
</head>
	
<body>
	
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
							<thead>
								<tr>
					<?php
									
						if($reportid==1){
							$reportsql = "SELECT description,inventory_qty,unit from ITEMS where inventory_qty<=0";
							echo "<th>Description</th><th>QTY</th><th>unit</th>";
						}			
						if($reportid==3){
							$reportsql = "SELECT CONCAT(employee.fname, ' ', employee.lname) AS cname, COUNT(*) AS requisition FROM requisition_details LEFT JOIN employee ON requisition_details.eid = employee.eid GROUP BY requisition_details.eid";
							echo "<th>Employee</th><th>No. of Requisition</th>";
						}
					?>
									
									
								</tr>
							</thead>
														<tbody>
			<?php
						include_once("include/functions.php");			
						$emplist = selectListSQL($reportsql);
						foreach ($emplist as $rows => $link) {
							
							if($reportid ==1){
								echo "<tr class='odd gradeX'>";
								echo "<td>".$link['description']."</td>";
								echo "<td>".$link['inventory_qty']."</td>";
								echo "<td>".$link['unit']."</td>";
								echo "</tr>";	
							}
							if($reportid ==3){
								echo "<tr class='odd gradeX'>";
								echo "<td>".$link['cname']."</td>";
								echo "<td>".$link['requisition']."</td>";
								echo "</tr>";	
							}
							
						}
						?>
															
														</tbody>
													</table>


</body>
</html>
<script>
	window.print();
</script>