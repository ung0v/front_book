<?= $this->extend('admin/_head') ?>
<?= $this->section('content') ?>
			
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Thêm danh mục sách</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="subjects.html">Danh mục</a></li>
									<li class="breadcrumb-item active">Thêm danh mục</li>
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
												<h5 class="form-title"><span>Thông tin mã giảm giá</span></h5>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Tên mã giảm giá</label>
													<input type="text" class="form-control" name="discount_name" value="<?= $discount['name']?>">
												</div>
											</div>
											<div class="col-12 ">
												<div class="form-group">
													<label>Mức giảm</label>
													<input type="number" class="form-control" name="discount_percent" step="any"  value="<?= $discount['discount_percent']?>">
												</div>
											</div>
                                            <div class="col-12">
												<div class="form-group">
													<label>Trạng thái</label>
													<select class="form-control" name="discount_active">
                                                        <option value="1" <?php if ($discount['active'] == 1) { echo 'selected';}?>>Đang sử dụng</option>
                                                        <option value="0" <?php if ($discount['active'] == 0) { echo 'selected';}?>>Hết hạn</option>
                                                        
													
													</select>
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