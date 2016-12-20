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
                <div id="addproject" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
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
					<input type="hidden" id="projectid" name="state-normal" class="form-control" >
                        <label class="col-md-3 control-label" for="state-normal">Project Name *</label>
                        <div class="col-md-7">
                            <input type="text" id="projectname" name="state-normal" class="form-control" >
                        </div>
						
						<label class="col-md-3 control-label" for="state-normal">Project Number</label>
                        <div class="col-md-7">
                            <input type="text" id="projectnumber" name="state-normal" class="form-control" >
                        </div>
						<label class="col-md-3 control-label" for="state-normal">Project Type</label>
                        <div class="col-md-7">
                            <select id="projecttype" name="example-select" class="form-control" size="1">
							<option value="0"></option>
                                <option value="Axiom">Axiom</option>
                                <option value="Counter Smart">Counter Smart</option>
                                <option value="Custom">Custom</option>
                                <option value="Defeciency">Defeciency</option>
								<option value="Dispatch">Dispatch</option>
								<option value="Diversity">Diversity</option>
								<option value="FAA">FAA</option>
								<option value="Good Will">Good Will</option>
								<option value="Honeywell">Honeywell</option>
								<option value="Identity">Identity</option>
								<option value="Millwork">Millwork</option>
								<option value="Parts Job">Parts Job</option>
								<option value="Raytheon">Raytheon</option>
								<option value="Response">Response</option>
								<option value="S-Series">S-Series</option>
								<option value="Strategy Air">Strategy Air</option>
								<option value="Strategy">Strategy</option>
								<option value="Tracon">Tracon</option>
								<option value="Warranty">Warranty</option>
								
								
                            </select>
                        </div>
						
						<label class="col-md-3 control-label" for="state-normal">Date</label>
                        <div class="col-md-7">
                          <input type="text" id="projectdate" name="example-datepicker3" class="form-control input-datepicker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
                        </div>
						
						<label class="col-md-3 control-label" for="state-normal">Sign-Off Originator</label>
                        <div class="col-md-7">
                            <input type="text" id="signoff" name="state-normal" class="form-control" >
                        </div>
						
                    </div>
                    
                </form>
                <!-- END Input States Content -->
            </div>
            <!-- END Input States Block -->
								
								
								
                            </div>
                            <div class="modal-footer">
                                <button type="button" id="saveproject" class="btn btn-effect-ripple btn-primary" onclick="saveproject();">Save and Edit Details</button>
								<button type="button" id="updateproject" class="btn btn-effect-ripple btn-primary" onclick="saveproject();">Update</button>
                                <button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Regular Modal -->
				
						<!-- Partial Responsive Block -->
						<div>
						 
					
					</div>
				<div class="block full">
				
					<div class="block-title">
						<h2>Project List</h2>
						<button type="button" id="addproject" class="btn btn-effect-ripple btn-primary" href="#addproject" data-toggle="modal" onclick="addproject();">Add Project</button>
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
							$projectid = $link['projectid'];
							$projectname = $link['projectname'];
							$projectnumber = $link['projectnumber'];
							$projecttype = $link['projecttype'];
							$formdate = $link['formdate'];
							$originator = $link['originator'];
														
							echo "<tr class='odd gradeX'>";
							echo "<td><a href='projectdetails.php?id=$projectid'>$projectname</a></td>";
							echo "<td>$projectnumber</td>";
							echo "<td>$projecttype</td>";
							echo "<td>$formdate</td>";
							echo "<td>$originator</td>";
							
							echo "<td class='center'> 
								
								<button class='btn btn-primary' onClick='editproject($projectid)'  data-toggle='modal' data-target='#addproject'><i class='fa fa-edit'></i></button>
								<button class='btn btn-danger notification' id='notification' onClick='deleteproject($projectid)'><i class='fa fa-times'></i></button>
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