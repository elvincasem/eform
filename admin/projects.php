<?php
include('header.php');
include_once("include/functions.php");	
?>
    <body>
        <!-- Page Wrapper -->
        <!-- In the PHP version you can set the following options from inc/config file -->
        <!--
            Available classes:

            'page-loading'      enables page preloader
        -->
        <div id="page-wrapper" class="page-loading">
            <!-- Preloader -->
            <!-- Preloader functionality (initialized in js/app.js) - pageLoading() -->
            <!-- Used only if page preloader enabled from inc/config (PHP version) or the class 'page-loading' is added in #page-wrapper element (HTML version) -->
            <div class="preloader">
                <div class="inner">
                    <!-- Animation spinner for all modern browsers -->
                    <div class="preloader-spinner themed-background hidden-lt-ie10"></div>

                    <!-- Text for IE9 -->
                    <h3 class="text-primary visible-lt-ie10"><strong>Loading..</strong></h3>
                </div>
            </div>
            <!-- END Preloader -->

            
            <div id="page-container" class="header-fixed-top sidebar-visible-lg-full">
            <!--<div id="page-container" class="header-fixed-top sidebar-visible-lg-mini">-->
                
			<?php include('sidebar.php'); ?>
                

                <!-- Main Container -->
                <div id="main-container">
                    
                    <?php include('headernav.php');?>

                    <!-- Page content -->
                    <div id="page-content">
                       
					   
					   <!-- Tables Row -->
			<div class="row">
			   <div class="col-lg-12">
			   
			   <!-- Regular Modal -->
                <div id="modal-regular" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h3 class="modal-title"><strong>Add Project</strong></h3>
                            </div>
                            <div class="modal-body">
                                
								
								<!-- Input States Block -->
            <div class="block">
                

                <!-- Input States Content -->
                <form action="#" method="post" class="form-horizontal" onsubmit="return false;">
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="state-normal">Project Name</label>
                        <div class="col-md-7">
                            <input type="text" id="state-normal" name="state-normal" class="form-control" >
                        </div>
                    </div>
                    
                </form>
                <!-- END Input States Content -->
            </div>
            <!-- END Input States Block -->
								
								
								
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-effect-ripple btn-primary">Save</button>
                                <button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Regular Modal -->
				
						<!-- Partial Responsive Block -->
						<div>
					<a href="#modal-regular" class="btn btn-effect-ripple btn-primary" data-toggle="modal">Add Project</a>	
					</div>
				<div class="block full">
				
					<div class="block-title">
						<h2>Project List</h2>
						<?php //print_r($heidirectory);?>
					</div>
					<div class="table-responsive">
						<table id="example-datatable" class="table table-striped table-bordered table-vcenter table-hover">
							<thead>
								<tr>
									<th>Project Name</th>
									<th>Project Number</th>
									<th>Project Type</th>
									<th>Date</th>
									<th>Originator</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
					<?php
											
						$itemlist = selectListSQL("SELECT * FROM project");
						//print_r($employeelist);
						foreach ($itemlist as $rows => $link) {
							$itemNo = $link['itemNo'];
							$description = $link['description'];
							$unit = $link['unit'];
							$unitcost = $link['unitCost'];
							$category = $link['category'];
							$inventoryqty = $link['inventory_qty'];
							$brand = $link['brand'];
							
							echo "<tr class='odd gradeX'>";
							echo "<td>$itemNo</td>";
							echo "<td><a href='itemdetails.php?id=$itemNo'>$description</a></td>";
							echo "<td>$inventoryqty</td>";
							echo "<td>$unit</td>";
							echo "<td>$unitcost</td>";
							echo "<td>$brand</td>";
							echo "<td>$category</td>";
							echo "<td class='center'> 
								
								<button class='btn btn-primary' onClick='edititem($itemNo)'  data-toggle='modal' data-target='#addItem'><i class='fa fa-edit'></i></button>
								<button class='btn btn-danger notification' id='notification' onClick='deleteitem($itemNo)'><i class='fa fa-times'></i></button>
							</td>";
							echo "</tr>";
						}
						?>
							
							
							
							
								
							</tbody>
						</table>
					</div>
				</div>
			   </div> <!-- end column -->
			</div> <!-- end row -->
						
					   
					   
                    </div>
                    <!-- END Page Content -->
                </div>
                <!-- END Main Container -->
            </div>
            <!-- END Page Container -->
        </div>
        <!-- END Page Wrapper -->
<?php include('footer.php');?>