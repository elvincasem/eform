<?php
include('header.php');
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
                        <!-- Blank Header
                        <div class="content-header">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="header-section">
                                        <h1>Page Title</h1>
                                    </div>
                                </div>
                                <div class="col-sm-6 hidden-xs">
                                    <div class="header-section">
                                        <ul class="breadcrumb breadcrumb-top">
                                            <li>Extra Pages</li>
                                            <li><a href="">Blank</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Blank Header -->
						
                        <!-- Get Started Block -->
                    <div class="row">
                        <div class="col-xs-8">
							<div class="block">
							
								<div class="block-title themed-background-dark text-light-op"><h4>Sign-off Originator:</h4></div>
								
								
								<div class="widget">
								<div class="widget-content widget-content-full">
									<table class="table table-striped table-borderless remove-margin">
										<tbody>
											<tr>
												<td><div class="text-black">Project Name:</div></td>
												<td class="text-center" style="width: 80%;"><span class="text-muted"><input type="text" id="example-input-small" name="example-input-small" class="form-control input-sm" placeholder=""></span></td>
											</tr>
											<tr>
												<td><div class="text-black">Number:</div></td>
												<td class="text-center" style="width: 80%;"><span class="text-muted"><input type="text" id="example-input-small" name="example-input-small" class="form-control input-sm" placeholder=""></span></td>
											</tr>
											<tr>
												<td><div class="text-black">Product Type:</div></td>
												<td class="text-center" style="width: 80%;"><span class="text-muted"><input type="text" id="example-input-small" name="example-input-small" class="form-control input-sm" placeholder=""></span></td>
											</tr>
											<tr>
												<td><div class="text-black">Date:</div></td>
												<td class="text-center" style="width: 80%;"><span class="text-muted"><input type="text" id="example-datepicker2" name="example-datepicker2" class="form-control input-datepicker" data-date-format="dd/mm/yy" placeholder="dd/mm/yy"></span></td>
											</tr>
										</tbody>
									</table>
								</div>
								</div>
								<!--<p>Project Name: (text)<br>Number: (text)<br>Product Type: (text)<br>Date: (text)</p>
								<p></p>
								<p></p>
								<p></p>-->
							</div>
						</div>
						
						<!-- Mini Widgets -->
						<div class="col-sm-4">
							<a href="#" class="widget text-center btn-effect-ripple">
								<div class="widget-content themed-background-info text-light-op text-center">
									<i class="fa fa-2x fa-download push-bit"></i><br>
									<strong>SAVE DOCUMENT</strong>
								</div>
							</a>
							<a href="#" class="widget text-center btn-effect-ripple">
								<div class="widget-content themed-background-muted text-dark">
									<i class="gi gi-print push-bit"></i><br>
									Print Sign-off<strong> &nbsp WITH &nbsp </strong>Installer Notes
								</div>
							</a>
							<a href="#" class="widget text-center btn-effect-ripple">
								<div class="widget-content themed-background-muted text-dark">
									<i class="gi gi-print push-bit"></i><br>
									Print Sign-off<strong> &nbsp WITHOUT &nbsp </strong>Installer Notes
								</div>
							</a>
						</div>
						<!-- END Mini Widgets -->
					</div>	
						
					<div class="row">
					<div class="col-xs-12">
						<!-- Partial Responsive Block -->
						<div class="block">
							<!-- Partial Responsive Title -->
							<div class="block-title themed-background-dark text-light-op">
								<h2>INCOMPLETES</h2>
							</div>
							<!-- END Partial Responsive Title -->

							<!-- Partial Responsive Content -->
							<table class="table table-striped table-borderless table-vcenter">
								<thead>
									<tr>
										<th>Item</th>
										<th class="text-center">Details</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><div class="text-black">1</div></td>
										<td>
											<div class="widget-content widget-content-full">
												<div class="row text-center">
													<div class="col-xs-6 col-lg-4">
														<h2 class="h5 text-uppercase push"><strong>Part Number</strong></h2>
														<input type="text" id="example-input-small" name="example-input-small" class="form-control input-sm" placeholder="">
													</div>
													<div class="col-xs-6 col-lg-4">
														<h2 class="h5 text-uppercase push"><strong>Part Description</strong></h2>
														<div class="col-lg-12">
															<select id="example-select" name="example-select" class="form-control" size="1">
																<option value="0">In Process</option>
																<option value="1">Require Design</option>
															</select>
														</div>
													</div>
													<div class="col-xs-6 col-lg-4">
														<h2 class="h5 text-uppercase push"><strong>Notes</strong></h2>
														<div class="col-lg-12">
															<textarea id="example-textarea-input" name="example-textarea-input" rows="2" class="form-control" placeholder=""></textarea>
														</div>
													</div>
													
												</div>
											</div>
										</td>
									</tr>
									
									<tr>
										<td><div class="text-black">2</div></td>
										<td>
											<div class="widget-content widget-content-full">
												<div class="row text-center">
													<div class="col-xs-6 col-lg-4">
														<h2 class="h5 text-uppercase push"><strong>Part Number</strong></h2>
														<input type="text" id="example-input-small" name="example-input-small" class="form-control input-sm" placeholder="">
													</div>
													<div class="col-xs-6 col-lg-4">
														<h2 class="h5 text-uppercase push"><strong>Part Description</strong></h2>
														<div class="col-lg-12">
															<select id="example-select" name="example-select" class="form-control" size="1">
																<option value="0">In Process</option>
																<option value="1">Require Design</option>
															</select>
														</div>
													</div>
													<div class="col-xs-6 col-lg-4">
														<h2 class="h5 text-uppercase push"><strong>Notes</strong></h2>
														<div class="col-lg-12">
															<textarea id="example-textarea-input" name="example-textarea-input" rows="2" class="form-control" placeholder=""></textarea>
														</div>
													</div>
													
												</div>
											</div>
										</td>
									</tr>
									
									<tr>
										<td><div class="text-black">3</div></td>
										<td>
											<div class="widget-content widget-content-full">
												<div class="row text-center">
													<div class="col-xs-6 col-lg-4">
														<h2 class="h5 text-uppercase push"><strong>Part Number</strong></h2>
														<input type="text" id="example-input-small" name="example-input-small" class="form-control input-sm" placeholder="">
													</div>
													<div class="col-xs-6 col-lg-4">
														<h2 class="h5 text-uppercase push"><strong>Part Description</strong></h2>
														<div class="col-lg-12">
															<select id="example-select" name="example-select" class="form-control" size="1">
																<option value="0">In Process</option>
																<option value="1">Require Design</option>
															</select>
														</div>
													</div>
													<div class="col-xs-6 col-lg-4">
														<h2 class="h5 text-uppercase push"><strong>Notes</strong></h2>
														<div class="col-lg-12">
															<textarea id="example-textarea-input" name="example-textarea-input" rows="2" class="form-control" placeholder=""></textarea>
														</div>
													</div>
													
												</div>
											</div>
										</td>
									</tr>
									
									<tr>
										<td><div class="text-black">4</div></td>
										<td>
											<div class="widget-content widget-content-full">
												<div class="row text-center">
													<div class="col-xs-6 col-lg-4">
														<h2 class="h5 text-uppercase push"><strong>Part Number</strong></h2>
														<input type="text" id="example-input-small" name="example-input-small" class="form-control input-sm" placeholder="">
													</div>
													<div class="col-xs-6 col-lg-4">
														<h2 class="h5 text-uppercase push"><strong>Part Description</strong></h2>
														<div class="col-lg-12">
															<select id="example-select" name="example-select" class="form-control" size="1">
																<option value="0">In Process</option>
																<option value="1">Require Design</option>
															</select>
														</div>
													</div>
													<div class="col-xs-6 col-lg-4">
														<h2 class="h5 text-uppercase push"><strong>Notes</strong></h2>
														<div class="col-lg-12">
															<textarea id="example-textarea-input" name="example-textarea-input" rows="2" class="form-control" placeholder=""></textarea>
														</div>
													</div>
													
												</div>
											</div>
										</td>
									</tr>
									
									<tr>
										<td><div class="text-black">5</div></td>
										<td>
											<div class="widget-content widget-content-full">
												<div class="row text-center">
													<div class="col-xs-6 col-lg-4">
														<h2 class="h5 text-uppercase push"><strong>Part Number</strong></h2>
														<input type="text" id="example-input-small" name="example-input-small" class="form-control input-sm" placeholder="">
													</div>
													<div class="col-xs-6 col-lg-4">
														<h2 class="h5 text-uppercase push"><strong>Part Description</strong></h2>
														<div class="col-lg-12">
															<select id="example-select" name="example-select" class="form-control" size="1">
																<option value="0">In Process</option>
																<option value="1">Require Design</option>
															</select>
														</div>
													</div>
													<div class="col-xs-6 col-lg-4">
														<h2 class="h5 text-uppercase push"><strong>Notes</strong></h2>
														<div class="col-lg-12">
															<textarea id="example-textarea-input" name="example-textarea-input" rows="2" class="form-control" placeholder=""></textarea>
														</div>
													</div>
													
												</div>
											</div>
										</td>
									</tr>
									
								</tbody>
							</table>
							<!-- END Partial Responsive Content -->
							
							
							
							
							<div class="row">
								<div class="col-sm-6 col-lg-3">
									<div class="widget">
										<div class="widget-content widget-content-mini themed-background-dark-flat">
											<strong class="text-light-op">Authorized for Original Shipment to be shipped Incomplete:</strong>
										</div>
										<div class="widget-content themed-background-muted">
											<div class="text-center">
											<span class="widget-heading text-dark">
												<div class="form-group">
													<div class="radio">
                                                    <label for="firstradio-yes">
                                                        <input type="radio" id="firstradio-yes" name="first-radios" value="YES"><strong>YES</strong>
                                                    </label>
													</div>
													
													<div class="radio">
                                                    <label for="firstradio-no">
                                                        <input type="radio" id="firstradio-no" name="first-radios" value="NO"><strong>NO</strong>
                                                    </label>
													</div>
												</div>
											</span>
											</div>
											<br>
											<div class="widget-heading text-dark">
												<div class="text-black">Solutions/ CS Rep:</div>
												<span class="text-muted"><input type="text" id="example-input-small" name="example-input-small" class="form-control input-sm" placeholder=""></span>
											</div>
											<div class="widget-heading text-dark">
												<div class="text-black">Date:</div>
												<span class="text-muted"><input type="text" id="example-datepicker2" name="example-datepicker2" class="form-control input-datepicker" data-date-format="dd/mm/yy" placeholder="dd/mm/yy"></span>
											</div>
										</div>
									</div>
								</div>
								
								
								<div class="col-sm-6 col-lg-3">
									<div class="widget">
										<div class="widget-content widget-content-mini themed-background-dark-flat">
											<strong class="text-light-op">Hardware boxes required:</strong>
										</div>
										<div class="widget-content themed-background-muted">
											<div class="text-center">
											<span class="widget-heading text-dark">
												<div class="form-group">
													<div class="radio">
														<label for="secondradio-yes">
															<input type="radio" id="secondradio-yes" name="second-radios" value="OF">OF
														</label>
													</div>
													<div class="radio">
														<label for="secondradio-no">
															<input type="radio" id="secondradio-no" name="second-radios" value="NONE">
														</label>
													</div>
												</div>
											</span>
											</div>
										</div>
										<br>
										<div class="widget-content widget-content-mini themed-background-dark-flat">
											<strong class="text-light-op">Authorized to be packaged with Exceptions:</strong>
										</div>
										<div class="widget-content themed-background-muted">
											<div class="text-center">
											<span class="widget-heading text-dark">
												<div class="form-group">
												<div class="radio">
                                                    <label for="thirdradio-yes">
                                                        <input type="radio" id="thirdradio-yes" name="third-radios" value="YES"><strong>YES</strong>
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label for="thirdradio-no">
                                                        <input type="radio" id="thirdradio-no" name="third-radios" value="NO"><strong>NO</strong>
                                                    </label>
                                                </div>
                                                </div>
											</span>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-sm-6 col-lg-3">
									<div class="widget">
										<div class="widget-content widget-content-mini themed-background-dark-flat">
											<strong class="text-light-op">Does the PM need to see and sign off the Incompletes?</strong>
										</div>
										<div class="widget-content themed-background-muted">
											<div class="text-center">
											<span class="widget-heading text-dark">
												<div class="form-group">
													<div class="radio">
                                                    <label for="fourthradio-yes">
                                                        <input type="radio" id="fourthradio-yes" name="fourth-radios" value="YES"><strong>YES</strong>
                                                    </label>
													</div>
													
													<div class="radio">
                                                    <label for="fourthradio-no">
                                                        <input type="radio" id="fourthradio-no" name="fourth-radios" value="NO"><strong>NO</strong>
                                                    </label>
													</div>
												</div>
											</span>
											</div>
											<br>
											<div class="widget-heading text-dark">
												<div class="text-black">Solutions/ CS Rep:</div>
												<span class="text-muted"><input type="text" id="example-input-small" name="example-input-small" class="form-control input-sm" placeholder=""></span>
											</div>
											<div class="widget-heading text-dark">
												<div class="text-black">Date:</div>
												<span class="text-muted"><input type="text" id="example-datepicker2" name="example-datepicker2" class="form-control input-datepicker" data-date-format="dd/mm/yy" placeholder="dd/mm/yy"></span>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-sm-6 col-lg-3">
									<div class="widget">
										<div class="widget-content widget-content-mini themed-background-dark-flat">
											<strong class="text-light-op">Does the PM need to see and sign off the Exceptions?</strong>
										</div>
										<div class="widget-content themed-background-muted">
											<div class="text-center">
											<span class="widget-heading text-dark">
												<div class="form-group">
													<div class="radio">
                                                    <label for="fifthradio-yes">
                                                        <input type="radio" id="fifthradio-yes" name="fifth-radios" value="YES"><strong>YES</strong>
                                                    </label>
													</div>
													
													<div class="radio">
                                                    <label for="fifthradio-no">
                                                        <input type="radio" id="fifthradio-no" name="fifth-radios" value="NO"><strong>NO</strong>
                                                    </label>
													</div>
												</div>
											</span>
											</div>
											<br>
											<div class="widget-heading text-dark">
												<div class="text-black">Solutions/ CS Rep:</div>
												<span class="text-muted"><input type="text" id="example-input-small" name="example-input-small" class="form-control input-sm" placeholder=""></span>
											</div>
											<div class="widget-heading text-dark">
												<div class="text-black">Date:</div>
												<span class="text-muted"><input type="text" id="example-datepicker2" name="example-datepicker2" class="form-control input-datepicker" data-date-format="dd/mm/yy" placeholder="dd/mm/yy"></span>
											</div>
										</div>
									</div>
								</div>
								
								
							</div>
							
							
							
						</div>
						
						<!-- END Partial Responsive Block -->
						</div>
					</div>
						
					
					
					
					<!-- Datatables Block -->
                        <!-- Datatables is initialized in js/pages/uiTables.js -->
                        <div class="block full">
                            <div class="block-title themed-background-dark text-light-op">
                                <h2>REGULAR PROJECT or EVANS F.A.T SIGN-OFF EXCEPTIONS</h2>
                            </div>
                            <div class="table-responsive">
                                <table id="example-datatable" class="table table-striped table-bordered table-condensed">
                                    <thead>
                                        <tr>
                                            <th class="text-center" style="width: 50px;">Exception #</th>
                                            <th>Issue Type</th>
                                            <th>Part Description(Include RH/LH)</th>
                                            <th>QTY</th>
                                            <th>Pos.#</th>
                                            <th>Issue Details</th>
                                            <th>Correction / Immediate Corrective Action</th>
                                            <th>Group Responsible for immediate action</th>
                                            <th>Group Responsible to fix Root Cause</th>
                                            <th>Ship Incomplete? (YES/NO)</th>
                                            <th>Exception completed and approved by:</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td class="text-center">1</td>
                                            <td class="text-center">1</td>
                                            <td class="text-center">1</td>
                                            <td class="text-center">1</td>
                                            <td class="text-center">1</td>
                                            <td class="text-center">1</td>
                                            <td class="text-center">1</td>
                                            <td class="text-center">1</td>
                                            <td class="text-center">1</td>
                                            <td class="text-center">1</td>
                                            <td class="text-center">1</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">2</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">3</td>
                                            <td class="text-center">3</td>
                                            <td class="text-center">3</td>
                                            <td class="text-center">3</td>
                                            <td class="text-center">3</td>
                                            <td class="text-center">3</td>
                                            <td class="text-center">3</td>
                                            <td class="text-center">3</td>
                                            <td class="text-center">3</td>
                                            <td class="text-center">3</td>
                                            <td class="text-center">3</td>
                                            <td class="text-center">3</td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END Datatables Block -->
					
					<!-- Datatables Block -->
                        <!-- Datatables is initialized in js/pages/uiTables.js -->
                        <div class="block full">
                            <div class="block-title themed-background-dark text-light-op">
                                <h2>1. REGULAR PROJECT or EVANS F.A.T SIGN-OFF EXCEPTIONS</h2>
                            </div>
							
							<div class="row">
							<div class="pull-left">
							<div class="col-lg-6">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
								<input type="text" id="example-input1-group1" name="example-input1-group1" class="form-control" placeholder="Name">
							</div>
							</div>
							</div>
							</div>
							<br>
							
							<!--<form action="page_forms_components.html" method="post" class="form-horizontal form-bordered" onsubmit="return false;">
								<div class="form-group">
									<label class="col-md-1 control-label text-left" for="example-hf-email">Name</label>
									<div class="col-md-11">
										<input type="text" id="example-hf-email" name="example-hf-email" class="form-control">
									</div>
								</div>
							</form>-->
							
							<div class="widget">
								<div class="widget-content widget-content-full">
									<table class="table table-striped table-borderless remove-margin sub-header">
										<tbody>
											<tr>
												<td><div class="text-black"><strong>Standard Inspection Item</strong></div></td>
												<td class="text-right" style="width: 80px;"><strong>YES &nbsp &nbsp &nbsp NO  &nbsp &nbsp &nbsp N/A</strong></td>
											</tr>
											
											
											<tr>
												<td><div class="text-black">1.01 Components Match the BoM?</div></td>
												<td class="text-right" style="width: 30%;">
													<label for="q101yes">
														<input type="radio" id="q101yes" name="q101" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp
													<label for="q101no">
														<input type="radio" id="q101no" name="q101" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp &nbsp
													<label for="q101na">
														<input type="radio" id="q101na" name="q101" value="">
													</label>
												</td>
											</tr>
											
											<tr>
												<td><div class="text-black">1.02 Hardware Box completed?</div></td>
												<td class="text-right" style="width: 30%;">
													<label for="q102yes">
														<input type="radio" id="q102yes" name="q102" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp
													<label for="q102no">
														<input type="radio" id="q102no" name="q102" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp &nbsp
													<label for="q102na">
														<input type="radio" id="q102na" name="q102" value="">
													</label>
												</td>
											</tr>
											
											<tr>
												<td><div class="text-black">1.03 Electrical Assembly checklist received?</div></td>
												<td class="text-right" style="width: 30%;">
													<label for="q103yes">
														<input type="radio" id="q103yes" name="q103" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp
													<label for="q103no">
														<input type="radio" id="q103no" name="q103" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp &nbsp
													<label for="q103na">
														<input type="radio" id="q103na" name="q103" value="">
													</label>
												</td>
											</tr>
											
											<tr>
												<td><div class="text-black">1.04 Metal Assembly checklist and BoM received?</div></td>
												<td class="text-right" style="width: 30%;">
													<label for="q104yes">
														<input type="radio" id="q104yes" name="q104" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp
													<label for="q104no">
														<input type="radio" id="q104no" name="q104" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp &nbsp
													<label for="q104na">
														<input type="radio" id="q104na" name="q104" value="">
													</label>
												</td>
											</tr>
											
											<tr>
												<td><div class="text-black">1.05 Cladding Assembly checklist and BoM received?</div></td>
												<td class="text-right" style="width: 30%;">
													<label for="q105yes">
														<input type="radio" id="q105yes" name="q105" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp
													<label for="q105no">
														<input type="radio" id="q105no" name="q105" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp &nbsp
													<label for="q105na">
														<input type="radio" id="q105na" name="q105" value="">
													</label>
												</td>
											</tr>
											
											<tr>
												<td><div class="text-black">1.06 Product specific checklist completed?</div></td>
												<td class="text-right" style="width: 30%;">
													<label for="q106yes">
														<input type="radio" id="q106yes" name="q106" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp
													<label for="q106no">
														<input type="radio" id="q106no" name="q106" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp &nbsp
													<label for="q106na">
														<input type="radio" id="q106na" name="q106" value="">
													</label>
												</td>
											</tr>
											
											<tr>
												<td><div class="text-black">1.07 Exceptions as per manufacturing checklists noted on the exceptions?</div></td>
												<td class="text-right" style="width: 30%;">
													<label for="q107yes">
														<input type="radio" id="q107yes" name="q107" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp
													<label for="q107no">
														<input type="radio" id="q107no" name="q107" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp &nbsp
													<label for="q107na">
														<input type="radio" id="q107na" name="q107" value="">
													</label>
												</td>
											</tr>
											
											<tr>
												<td><div class="text-black">1.08 Any Changes to the BoM at Sign Off?</div></td>
												<td class="text-right" style="width: 30%;">
													<label for="q108yes">
														<input type="radio" id="q108yes" name="q108" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp
													<label for="q108no">
														<input type="radio" id="q108no" name="q108" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp &nbsp
													<label for="q108na">
														<input type="radio" id="q108na" name="q108" value="">
													</label>
												</td>
											</tr>
											
											<tr>
												<td><div class="text-black">1.09 Shipping Packet included on door at module 1?</div></td>
												<td class="text-right" style="width: 30%;">
													<label for="q109yes">
														<input type="radio" id="q109yes" name="q109" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp
													<label for="q109no">
														<input type="radio" id="q109no" name="q109" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp &nbsp
													<label for="q109na">
														<input type="radio" id="q109na" name="q109" value="">
													</label>
												</td>
											</tr>
											
											<tr>
												<td><div class="text-black">1.10 All Specials on Finish Schedule Completed?</div></td>
												<td class="text-right" style="width: 30%;">
													<label for="q110yes">
														<input type="radio" id="q110yes" name="q110" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp
													<label for="q110no">
														<input type="radio" id="q110no" name="q110" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp &nbsp
													<label for="q110na">
														<input type="radio" id="q110na" name="q110" value="">
													</label>
												</td>
											</tr>
											
										</tbody>
									</table>
									
									<br>
									<br>

									
									<table class="table table-striped table-borderless remove-margin sub-header">
										<tbody>
											<tr>
												<td><div class="text-black"><strong>Project Staging</strong></div></td>
												<td class="text-right" style="width: 30%;"><strong>YES &nbsp &nbsp &nbsp NO  &nbsp &nbsp &nbsp N/A</strong></td>
											</tr>
											
											
											<tr>
												<td><div class="text-black">1.12 Product fully staged?</div></td>
												<td class="text-right" style="width: 30%;">
													<label for="q112yes">
														<input type="radio" id="q112yes" name="q112" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp
													<label for="q112no">
														<input type="radio" id="q112no" name="q112" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp &nbsp
													<label for="q112na">
														<input type="radio" id="q112na" name="q112" value="">
													</label>
												</td>
											</tr>
											
											<tr>
												<td><div class="text-black">1.13 Product partially staged?<br>Position nos.:<input type="text" id="" name="" class="form-control" placeholder=""></div></td>
												<td class="text-right" style="width: 30%;">
													<label for="q113yes">
														<input type="radio" id="q113yes" name="q113" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp
													<label for="q113no">
														<input type="radio" id="q113no" name="q113" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp &nbsp
													<label for="q113na">
														<input type="radio" id="q113na" name="q113" value="">
													</label>
												</td>
											</tr>
										</tbody>
									</table>
							
								<br>
								<div class="row">
								<div class="col-xs-12">
									<h2 class="h5 text-uppercase push text-center"><strong>Final Assembly Notes:</strong></h2>
									<div class="col-lg-12">
										<textarea id="example-textarea-input" name="example-textarea-input" rows="2" class="form-control" placeholder=""></textarea>
									</div>
								</div>
								</div>
								
								</div>
							</div>
                        </div>
						
						
						
						<div class="block full">
                            <div class="block-title themed-background-dark text-light-op">
                                <h2>2. SOLUTIONS/CLIENT SERVICES</h2>
                            </div>
							
							<div class="row">
							<div class="pull-left">
							<div class="col-lg-6">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
								<input type="text" id="example-input1-group1" name="example-input1-group1" class="form-control" placeholder="Name">
							</div>
							</div>
							</div>
							</div>
							<br>
							
							<div class="widget">
								<div class="widget-content widget-content-full">
									<table class="table table-striped table-borderless remove-margin sub-header">
										<tbody>
											<tr>
												<td><div class="text-black"><strong>Standard Inspection Item</strong></div></td>
												<td class="text-right" style="width: 30%;"><strong>YES &nbsp &nbsp &nbsp NO  &nbsp &nbsp &nbsp N/A</strong></td>
											</tr>
											
											
											<tr>
												<td><div class="text-black">2.1 Console/Millwork: Colors match Finish Schedule</div></td>
												<td class="text-right" style="width: 30%;">
													<label for="q21yes">
														<input type="radio" id="q21yes" name="q21" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp
													<label for="q21no">
														<input type="radio" id="q21no" name="q21" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp &nbsp
													<label for="q21na">
														<input type="radio" id="q21na" name="q21" value="">
													</label>
												</td>
											</tr>
											
											<tr>
												<td><div class="text-black">2.2 Console: Client equipment will fit into console. Measurement taken</div></td>
												<td class="text-right" style="width: 30%;">
													<label for="q22yes">
														<input type="radio" id="q22yes" name="q22" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp
													<label for="q22no">
														<input type="radio" id="q22no" name="q22" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp &nbsp
													<label for="q22na">
														<input type="radio" id="q22na" name="q22" value="">
													</label>
												</td>
											</tr>
											
											<tr>
												<td><div class="text-black">2.3 Buyouts: All Buyout scope is correct (slatwall mount vs. desktop mount)</div></td>
												<td class="text-right" style="width: 30%;">
													<label for="q23yes">
														<input type="radio" id="q23yes" name="q23" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp
													<label for="q23no">
														<input type="radio" id="q23no" name="q23" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp &nbsp
													<label for="q23na">
														<input type="radio" id="q23na" name="q23" value="">
													</label>
												</td>
											</tr>
											
											<tr>
												<td><div class="text-black">2.4 Buyouts:  All Buyouts have been packaged together or installed on console correctly.</div></td>
												<td class="text-right" style="width: 30%;">
													<label for="q24yes">
														<input type="radio" id="q24yes" name="q24" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp
													<label for="q24no">
														<input type="radio" id="q24no" name="q24" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp &nbsp
													<label for="q24na">
														<input type="radio" id="q24na" name="q24" value="">
													</label>
												</td>
											</tr>
											
											<tr>
												<td><div class="text-black">2.5 Buyouts:  All Buyouts free from damages, and have been checked for quality</div></td>
												<td class="text-right" style="width: 30%;">
													<label for="q25yes">
														<input type="radio" id="q25yes" name="q25" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp
													<label for="q25no">
														<input type="radio" id="q25no" name="q25" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp &nbsp
													<label for="q25na">
														<input type="radio" id="q25na" name="q25" value="">
													</label>
												</td>
											</tr>
											
											<tr>
												<td><div class="text-black">2.6 Customer Equipment: Is there any customer equipment to be returned?</div></td>
												<td class="text-right" style="width: 30%;">
													<label for="q26yes">
														<input type="radio" id="q26yes" name="q26" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp
													<label for="q26no">
														<input type="radio" id="q26no" name="q26" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp &nbsp
													<label for="q26na">
														<input type="radio" id="q26na" name="q26" value="">
													</label>
												</td>
											</tr>
											
											<tr>
												<td><div class="text-black">2.7 TKS Products to be consolidated with console shipment (Canada / International)<span class="help-block">*Parts, Warranties, Deficiencies and Goodwill - Client Services will sign-off the section of this form.</span></div></td>
												<td class="text-right" style="width: 30%;">
													<label for="q27yes">
														<input type="radio" id="q27yes" name="q27" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp
													<label for="q27no">
														<input type="radio" id="q27no" name="q27" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp &nbsp
													<label for="q27na">
														<input type="radio" id="q27na" name="q27" value="">
													</label>
												</td>
											</tr>
											
										</tbody>
									</table>
									
									<br>
									<br>

									
									<table class="table table-striped table-borderless remove-margin sub-header">
										<tbody>
											<tr>
												<td><div class="text-black"><strong>Extra Inspection Item</strong></div></td>
												<td class="text-right" style="width: 30%;"><strong>YES &nbsp &nbsp &nbsp NO  &nbsp &nbsp &nbsp N/A</strong></td>
											</tr>
											
											
											<tr>
												<td><div class="text-black"><input type="text" id="" name="" class="form-control" placeholder="<insert description of item to be checked>"></div></td>
												<td class="text-right" style="width: 30%;">
													<label for="q2input1yes">
														<input type="radio" id="q2input1yes" name="q2input1" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp
													<label for="q2input1no">
														<input type="radio" id="q2input1no" name="q2input1" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp &nbsp
													<label for="q2input1na">
														<input type="radio" id="q2input1na" name="q2input1" value="">
													</label>
												</td>
											</tr>
											
											<tr>
												<td><div class="text-black"><input type="text" id="" name="" class="form-control" placeholder="<insert description of item to be checked>"></div></td>
												<td class="text-right" style="width: 30%;">
													<label for="q2input2yes">
														<input type="radio" id="q2input2yes" name="q2input2" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp
													<label for="q2input2no">
														<input type="radio" id="q2input2no" name="q2input2" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp &nbsp
													<label for="q2input2na">
														<input type="radio" id="q2input2na" name="q2input2" value="">
													</label>
												</td>
											</tr>
											
											<tr>
												<td><div class="text-black"><input type="text" id="" name="" class="form-control" placeholder="<insert description of item to be checked>"></div></td>
												<td class="text-right" style="width: 30%;">
													<label for="q2input3yes">
														<input type="radio" id="q2input3yes" name="q2input3" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp
													<label for="q2input3no">
														<input type="radio" id="q2input3no" name="q2input3" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp &nbsp
													<label for="q2input3na">
														<input type="radio" id="q2input3na" name="q2input3" value="">
													</label>
												</td>
											</tr>
										</tbody>
									</table>
							
								<br>
								<div class="row">
								<div class="col-xs-12">
									<h2 class="h5 text-uppercase push text-center"><strong>Solutions/Client Services Notes:</strong></h2>
									<div class="col-lg-12">
										<textarea id="example-textarea-input" name="example-textarea-input" rows="2" class="form-control" placeholder=""></textarea>
									</div>
								</div>
								</div>
								
								</div>
							</div>
                        </div>
						
						
						
						
						<div class="block full">
                            <div class="block-title themed-background-dark text-light-op">
                                <h2>3. DESIGN</h2>
                            </div>
							
							<div class="row">
							<div class="pull-left">
							<div class="col-lg-6">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
								<input type="text" id="example-input1-group1" name="example-input1-group1" class="form-control" placeholder="Name">
							</div>
							</div>
							</div>
							</div>
							<br>
							
							<div class="widget">
								<div class="widget-content widget-content-full">
									<table class="table table-striped table-borderless remove-margin sub-header">
										<tbody>
											<tr>
												<td><div class="text-black"><strong>Standard Inspection Item</strong></div></td>
												<td class="text-right" style="width: 30%;"><strong>YES &nbsp &nbsp &nbsp NO  &nbsp &nbsp &nbsp N/A</strong></td>
											</tr>
											
											
											<tr>
												<td><div class="text-black">3.1 Verify Console Quantity and Layout vs PQ/ Drawings/ BOM/ Structural?<span class="help-block">Modules, Corners, End Panels, Work Surfaces, ECT.</span></div></td>
												<td class="text-right" style="width: 30%;">
													<label for="q31yes">
														<input type="radio" id="q31yes" name="q31" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp
													<label for="q31no">
														<input type="radio" id="q31no" name="q31" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp &nbsp
													<label for="q31na">
														<input type="radio" id="q31na" name="q31" value="">
													</label>
												</td>
											</tr>
											
											<tr>
												<td><div class="text-black">3.2 Verify all Accessories vs PQ/ Drawings/ BOM/ Structural?<span class="help-block">Prcs Shelves, Kybd / Pencil Drawers, Anchor Kits, Rackmount Kits, Turrets, Byouts.</span></div></td>
												<td class="text-right" style="width: 30%;">
													<label for="q32yes">
														<input type="radio" id="q32yes" name="q32" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp
													<label for="q32no">
														<input type="radio" id="q32no" name="q32" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp &nbsp
													<label for="q32na">
														<input type="radio" id="q32na" name="q32" value="">
													</label>
												</td>
											</tr>
											
											<tr>
												<td><div class="text-black">3.3 Verify all Electronic Components vs PQ/ Drawings/ BOM/ Structural?<span class="help-block">Task Lights, Power Bars, Lift Column Components, Fans, Grommets, Transformers, Grounding, Heat Panel, JCU.</span></div></td>
												<td class="text-right" style="width: 30%;">
													<label for="q33yes">
														<input type="radio" id="q33yes" name="q33" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp
													<label for="q33no">
														<input type="radio" id="q33no" name="q33" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp &nbsp
													<label for="q33na">
														<input type="radio" id="q33na" name="q33" value="">
													</label>
												</td>
											</tr>
											
										</tbody>
									</table>
									
									<br>
									<br>

									
									<table class="table table-striped table-borderless remove-margin sub-header">
										<tbody>
											<tr>
												<td><div class="text-black"><strong>Extra Inspection Item</strong></div></td>
												<td class="text-right" style="width: 30%;"><strong>YES &nbsp &nbsp &nbsp NO  &nbsp &nbsp &nbsp N/A</strong></td>
											</tr>
											
											
											<tr>
												<td><div class="text-black"><input type="text" id="" name="" class="form-control" placeholder="<insert description of item to be checked>"></div></td>
												<td class="text-right" style="width: 30%;">
													<label for="q3input1yes">
														<input type="radio" id="q3input1yes" name="q3input1" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp
													<label for="q3input1no">
														<input type="radio" id="q3input1no" name="q3input1" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp &nbsp
													<label for="q3input1na">
														<input type="radio" id="q3input1na" name="q3input1" value="">
													</label>
												</td>
											</tr>
											
											<tr>
												<td><div class="text-black"><input type="text" id="" name="" class="form-control" placeholder="<insert description of item to be checked>"></div></td>
												<td class="text-right" style="width: 30%;">
													<label for="q3input2yes">
														<input type="radio" id="q3input2yes" name="q3input2" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp
													<label for="q3input2no">
														<input type="radio" id="q3input2no" name="q3input2" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp &nbsp
													<label for="q3input2na">
														<input type="radio" id="q3input2na" name="q3input2" value="">
													</label>
												</td>
											</tr>
										</tbody>
									</table>
							
								<br>
								<div class="row">
								<div class="col-xs-12">
									<h2 class="h5 text-uppercase push text-center"><strong>Design Notes:</strong></h2>
									<div class="col-lg-12">
										<textarea id="example-textarea-input" name="example-textarea-input" rows="2" class="form-control" placeholder=""></textarea>
									</div>
								</div>
								</div>
								
								</div>
							</div>
                        </div>
						
						
						
						
						<div class="block full">
                            <div class="block-title themed-background-dark text-light-op">
                                <h2>4. QUALITY ASSURANCE</h2>
                            </div>
							
							<div class="row">
							<div class="pull-left">
							<div class="col-lg-6">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
								<input type="text" id="example-input1-group1" name="example-input1-group1" class="form-control" placeholder="Name">
							</div>
							</div>
							</div>
							</div>
							<br>
							
							<div class="widget">
								<div class="widget-content widget-content-full">
									<table class="table table-striped table-borderless remove-margin sub-header">
										<tbody>
											<tr>
												<td><div class="text-black"><strong>Standard Inspection Item</strong></div></td>
												<td class="text-right" style="width: 30%;"><strong>YES &nbsp &nbsp &nbsp NO  &nbsp &nbsp &nbsp N/A</strong></td>
											</tr>
											
											
											<tr>
												<td><div class="text-black">4.1 Fit</div></td>
												<td class="text-right" style="width: 30%;">
													<label for="q41yes">
														<input type="radio" id="q41yes" name="q41" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp
													<label for="q41no">
														<input type="radio" id="q41no" name="q41" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp &nbsp
													<label for="q41na">
														<input type="radio" id="q41na" name="q41" value="">
													</label>
												</td>
											</tr>
											
											<tr>
												<td><div class="text-black">4.2 Finish</div></td>
												<td class="text-right" style="width: 30%;">
													<label for="q42yes">
														<input type="radio" id="q42yes" name="q42" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp
													<label for="q42no">
														<input type="radio" id="q42no" name="q42" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp &nbsp
													<label for="q42na">
														<input type="radio" id="q42na" name="q42" value="">
													</label>
												</td>
											</tr>
											
											<tr>
												<td><div class="text-black">4.3 Function</div></td>
												<td class="text-right" style="width: 30%;">
													<label for="q43yes">
														<input type="radio" id="q43yes" name="q43" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp
													<label for="q43no">
														<input type="radio" id="q43no" name="q43" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp &nbsp
													<label for="q43na">
														<input type="radio" id="q43na" name="q43" value="">
													</label>
												</td>
											</tr>
											
										</tbody>
									</table>
							
								<br>
								<div class="row">
								<div class="col-xs-12">
									<h2 class="h5 text-uppercase push text-center"><strong>Quality Assurance Notes:</strong></h2>
									<div class="col-lg-12">
										<textarea id="example-textarea-input" name="example-textarea-input" rows="2" class="form-control" placeholder=""></textarea>
									</div>
								</div>
								</div>
								
								</div>
							</div>
                        </div>
					
					
					
					
					
					
					<div class="block full">
                            <div class="block-title themed-background-dark text-light-op">
                                <h2>5. PACKAGING</h2>
                            </div>
							
							<div class="row">
							<div class="pull-left">
							<div class="col-lg-6">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
								<input type="text" id="example-input1-group1" name="example-input1-group1" class="form-control" placeholder="Name">
							</div>
							</div>
							</div>
							</div>
							<br>
							
							<div class="widget">
								<div class="widget-content widget-content-full">
									<table class="table table-striped table-borderless remove-margin sub-header">
										<tbody>
											<tr>
												<td><div class="text-black"><strong>Standard Inspection Item</strong></div></td>
												<td class="text-right" style="width: 80px;"><strong>YES &nbsp &nbsp &nbsp NO  &nbsp &nbsp &nbsp N/A</strong></td>
											</tr>
											
											
											<tr>
												<td><div class="text-black">5.01 Have pictures of project been taken?</div></td>
												<td class="text-right" style="width: 30%;">
													<label for="q501yes">
														<input type="radio" id="q501yes" name="q501" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp
													<label for="q501no">
														<input type="radio" id="q501no" name="q501" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp &nbsp
													<label for="q501na">
														<input type="radio" id="q501na" name="q501" value="">
													</label>
												</td>
											</tr>
											
											<tr>
												<td><div class="text-black">5.02 Is there a Toolbox packed for this project?</div></td>
												<td class="text-right" style="width: 30%;">
													<label for="q502yes">
														<input type="radio" id="q502yes" name="q502" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp
													<label for="q502no">
														<input type="radio" id="q502no" name="q502" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp &nbsp
													<label for="q502na">
														<input type="radio" id="q502na" name="q502" value="">
													</label>
												</td>
											</tr>
											
											<tr>
												<td><div class="text-black">5.03 Packaging checklist completed?</div></td>
												<td class="text-right" style="width: 30%;">
													<label for="q503yes">
														<input type="radio" id="q503yes" name="q503" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp
													<label for="q503no">
														<input type="radio" id="q503no" name="q503" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp &nbsp
													<label for="q503na">
														<input type="radio" id="q503na" name="q503" value="">
													</label>
												</td>
											</tr>
											
											<tr>
												<td><div class="text-black">5.05 Are all exceptions signed off prior to shipment?</div></td>
												<td class="text-right" style="width: 30%;">
													<label for="q505yes">
														<input type="radio" id="q505yes" name="q505" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp
													<label for="q505no">
														<input type="radio" id="q505no" name="q505" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp &nbsp
													<label for="q505na">
														<input type="radio" id="q505na" name="q505" value="">
													</label>
												</td>
											</tr>
											
										</tbody>
									</table>
									
									<br>
									<br>

									
									<table class="table table-striped table-borderless remove-margin sub-header">
										<tbody>
											<tr>
												<td><div class="text-black"><strong>Extra Inspection Item</strong></div></td>
												<td class="text-right" style="width: 30%;"><strong>YES &nbsp &nbsp &nbsp NO  &nbsp &nbsp &nbsp N/A</strong></td>
											</tr>
											
											
											<tr>
												<td><div class="text-black">5.06 BoM And Prodect Specific Checklist are Completed?</div></td>
												<td class="text-right" style="width: 30%;">
													<label for="q506yes">
														<input type="radio" id="q506yes" name="q506" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp
													<label for="q506no">
														<input type="radio" id="q506no" name="q506" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp &nbsp
													<label for="q506na">
														<input type="radio" id="q506na" name="q506" value="">
													</label>
												</td>
											</tr>
											
											<tr>
												<td><div class="text-black">5.07 All approved items have been clearly communicated to the Packaging Team?</div></td>
												<td class="text-right" style="width: 30%;">
													<label for="q507yes">
														<input type="radio" id="q507yes" name="q507" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp
													<label for="q507no">
														<input type="radio" id="q507no" name="q507" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp &nbsp
													<label for="q507na">
														<input type="radio" id="q507na" name="q507" value="">
													</label>
												</td>
											</tr>
											
											<tr>
												<td><div class="text-black">5.08 Any outstanding issues are clearly communicated to the Packaging Team?</div></td>
												<td class="text-right" style="width: 30%;">
													<label for="q508yes">
														<input type="radio" id="q508yes" name="q508" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp
													<label for="q508no">
														<input type="radio" id="q508no" name="q508" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp &nbsp
													<label for="q508na">
														<input type="radio" id="q508na" name="q508" value="">
													</label>
												</td>
											</tr>
											
											<tr>
												<td><div class="text-black">5.09 Loose Parts have been Boxed and Sealed and are clearly marked with Part #?</div></td>
												<td class="text-right" style="width: 30%;">
													<label for="q509yes">
														<input type="radio" id="q509yes" name="q509" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp
													<label for="q509no">
														<input type="radio" id="q509no" name="q509" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp &nbsp
													<label for="q509na">
														<input type="radio" id="q509na" name="q509" value="">
													</label>
												</td>
											</tr>
											
											<tr>
												<td><div class="text-black">5.10 Has the E-Arm checklist been provided?</div></td>
												<td class="text-right" style="width: 30%;">
													<label for="q510yes">
														<input type="radio" id="q510yes" name="q510" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp
													<label for="q510no">
														<input type="radio" id="q510no" name="q510" value="">
													</label>
													&nbsp &nbsp &nbsp
													&nbsp &nbsp &nbsp
													<label for="q510na">
														<input type="radio" id="q510na" name="q510" value="">
													</label>
												</td>
											</tr>
											
										</tbody>
									</table>
							
								<br>
								<div class="row">
								<div class="col-xs-12">
									<h2 class="h5 text-uppercase push text-center"><strong>Packaging Notes:</strong></h2>
									<div class="col-lg-12">
										<textarea id="example-textarea-input" name="example-textarea-input" rows="3" class="form-control" placeholder=""></textarea>
									</div>
								</div>
								</div>
								
								</div>
							</div>
                        </div>

					<div class="row">
                        <div class="col-xs-12">
							<div class="block">
								<div class="widget">
								<div class="widget-content widget-content-full">
									<table class="table table-striped table-borderless remove-margin">
										<tbody>
											<tr>
												<td><div class="text-black">Project Name:</div></td>
												<td class="text-center" style="width: 80%;"><span class="text-muted"><input type="text" id="example-input-small" name="example-input-small" class="form-control input-sm" placeholder=""></span></td>
											</tr>
											<tr>
												<td><div class="text-black">Number:</div></td>
												<td class="text-center" style="width: 80%;"><span class="text-muted"><input type="text" id="example-input-small" name="example-input-small" class="form-control input-sm" placeholder=""></span></td>
											</tr>
											<tr>
												<td><div class="text-black">Product Type:</div></td>
												<td class="text-center" style="width: 80%;"><span class="text-muted"><input type="text" id="example-input-small" name="example-input-small" class="form-control input-sm" placeholder=""></span></td>
											</tr>
											<tr>
												<td><div class="text-black">Date:</div></td>
												<td class="text-center" style="width: 80%;"><span class="text-muted"><input type="text" id="example-datepicker2" name="example-datepicker2" class="form-control input-datepicker" data-date-format="dd/mm/yy" placeholder="dd/mm/yy"></span></td>
											</tr>
										</tbody>
									</table>
								</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row">
                        <div class="col-xs-12">
							<div class="block">
								<div class="widget">
								<div class="widget-content widget-content-full">
									<div class="row">
									<div class="col-xs-12">
										<h2 class="h5 text-uppercase push text-center"><strong>Project/Installer Notes:</strong></h2>
										<div class="col-lg-12">
											<textarea id="example-textarea-input" name="example-textarea-input" rows="2" class="form-control" placeholder=""></textarea>
										</div>
									</div>
									</div>
									
									<br>
									<br>
									
									<div class="row">
									<div class="col-xs-12">
									
										<div class="col-sm-6">
											<div class="widget">
												<div class="widget-content widget-content-mini themed-background-dark-flat">
													<strong class="text-light-op">Handover from Integration to Packaging:</strong>
												</div>
												<div class="widget-content themed-background-muted">
													<div class="widget-heading text-dark">
														<div class="text-black">Integration Rep:</div>
														<span class="text-muted"><input type="text" id="example-input-small" name="example-input-small" class="form-control input-sm" placeholder=""></span>
														<br>
														<div class="text-black">Packaging Rep:</div>
														<span class="text-muted"><input type="text" id="example-input-small" name="example-input-small" class="form-control input-sm" placeholder=""></span>
													</div>
												</div>

											</div>
										</div>
										
										<div class="col-sm-6">
											<div class="widget">
												<div class="widget-content widget-content-mini themed-background-dark-flat">
													<strong class="text-light-op">Time and date Project Released to Packaging:</strong>
												</div>
												<div class="widget-content themed-background-muted">
													<div class="widget-heading text-dark">
														<div class="text-black">Time:</div>
														<span class="text-muted">
															<div class="input-group bootstrap-timepicker">
																<input type="text" id="example-timepicker" name="example-timepicker" class="form-control input-timepicker">
																<span class="input-group-btn">
																	<a href="javascript:void(0)" class="btn btn-effect-ripple btn-primary"><i class="fa fa-clock-o"></i></a>
																</span>
															</div>
														</span>
														
														<br>
														
														<div class="text-black">Date:</div>
														<span class="text-muted"><input type="text" id="example-datepicker2" name="example-datepicker2" class="form-control input-datepicker" data-date-format="dd/mm/yy" placeholder="dd/mm/yy"></span>
														
														
													</div>
												</div>
											</div>
										</div>
										
									</div>
									</div>
								</div>
								</div>
							</div>
						</div>
					</div>
					
						
                        <!-- END Get Started Block -->
                    </div>
                    <!-- END Page Content -->
                </div>
                <!-- END Main Container -->
            </div>
            <!-- END Page Container -->
        </div>
        <!-- END Page Wrapper -->
<?php include('footer.php');?>