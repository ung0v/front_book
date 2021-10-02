<?= $this->extend('admin/_head') ?>
<?= $this->section('content') ?>
			
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Thêm nhà vận chuyển</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="subjects.html">Nhà vận chuyển</a></li>
									<li class="breadcrumb-item active">Thêm nhà vận chuyển</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
				
					<div class="row">
						<div class="col-sm-12">
						
							<div class="card">
								<div class="card-body">
									<form method="POST">
										<div class="row">
											<div class="col-12">
												<h5 class="form-title"><span>Thông tin nhà vận chuyển</span></h5>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Tên</label>
													<input type="text" class="form-control" name="shipping_name">
												</div>
											</div>
                                            <div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Số điện thoại</label>
													<input type="text" class="form-control" name="shipping_phone">
												</div>
											</div>
                                            <div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Email</label>
													<input type="text" class="form-control" name="shipping_email">
												</div>
											</div>
                                            <div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Địa chỉ</label>
													<input type="text" class="form-control" name="shipping_addr">
												</div>
											</div>
											<div class="col-12">
												<p name="message" style="color:red; font-size:70%; text-align:center;"><?php echo $message?></p>
											</div>
											<div class="col-12">
												<button type="submit" class="btn btn-primary">Thêm</button>
											</div>
										</div>
									</form>
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
		
		<!-- Custom JS -->
		<!-- <script src="assets/js/script.js"></script> -->
<?= $this->endSection() ?>