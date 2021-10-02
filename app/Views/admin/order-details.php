<?= $this->extend('admin/_head') ?>
<?= $this->section('content') ?>
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Expenses</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Expenses</li>
								</ul>
							</div>
							<div class="col-auto text-right float-right ml-auto">
								<a href="#" class="btn btn-outline-primary mr-2"><i class="fas fa-download"></i> Download</a>
								<a href="add-expenses.html" class="btn btn-primary"><i class="fas fa-plus"></i></a>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
				
					<div class="row">
						<div class="col-sm-12">
						
							<div class="card card-table">
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-hover table-center mb-0 datatable">
											<thead>
												<tr>
													<th>ID</th>
													<th>Item Name</th>
													<th>Item Quality</th>
													<th>Amount</th>
													<th>Purchase Source</th>
													<th>Purchase Date</th>
													<th>Purchase By</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>PRE2209</td>
													<td>
														<h2>
															<a>Chair</a>
														</h2>
													</td>
													<td>6</td>
													<td>$120</td>
													<td>Abc Shop</td>													
													<td>17 Aug 2020</td>
													<td>Lois</td>
												</tr>
												<tr>
													<td>PRE2213</td>
													<td>
														<h2>
															<a>Table</a>
														</h2>
													</td>
													<td>2</td>
													<td>$56</td>
													<td>Online</td>													
													<td>05 Aug 2020</td>
													<td>Malynne</td>
												</tr>
												<tr>
													<td>PRE2143</td>
													<td>
														<h2>
															<a>Desk</a>
														</h2>
													</td>
													<td>6</td>
													<td>$378</td>
													<td>Take Away</td>
													
													<td>04 Sept 2020</td>
													<td>Levell Scott</td>
												</tr>
												<tr>
													<td>PRE2431</td>
													<td>
														<h2>
															<a>Projector</a>
														</h2>
													</td>
													<td>1</td>
													<td>$246</td>
													<td>Real Shop</td>													
													<td>17 Sept 2020</td>
													<td>Minnie</td>
												</tr>
												<tr>
													<td>PRE1534</td>
													<td>
														<h2>
															<a>Hard disk</a>
														</h2>
													</td>
													<td>2</td>
													<td>$560</td>
													<td>Sony Center</td>													
													<td>02 Oct 2020</td>
													<td>Lois A</td>
												</tr>
												<tr>
													<td>PRE2153</td>
													<td>
														<h2>
															<a>Note books</a>
														</h2>
													</td>
													<td>100</td>
													<td>$236</td>
													<td>DJ Stationary</td>													
													<td>28 Oct 2020</td>
													<td>Calvin</td>
												</tr>
												<tr>
													<td>PRE1252</td>
													<td>
														<h2>
															<a>Water Bottle</a>
														</h2>
													</td>
													<td>267</td>
													<td>$237</td>
													<td>DJ Stationary</td>													
													<td>17 Oct 2020</td>
													<td>Joe Kelley</td>
												</tr>
												<tr>
													<td>PRE1536</td>
													<td>
														<h2>
															<a>Hard disk</a>
														</h2>
													</td>
													<td>3</td>
													<td>$560</td>
													<td>music Center</td>													
													<td>02 Oct 2020</td>
													<td>Lois A</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>							
						</div>					
					</div>					
				</div>

			

			<!-- /Page Wrapper -->
			
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <!-- <script src="assets/js/jquery-3.5.1.min.js"></script> -->
		
		<!-- Bootstrap Core JS -->
        <!-- <script src="assets/js/popper.min.js"></script> -->
        <!-- <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> -->
		
		<!-- Slimscroll JS -->
        <!-- <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script> -->

		<!-- Datatables JS -->
		<!-- <script src="assets/plugins/datatables/datatables.min.js"></script> -->
		
		<!-- Custom JS -->
		<!-- <script src="assets/js/script.js"></script> -->
		<?= $this->endSection() ?>