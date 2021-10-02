<?= $this->extend('admin/_head') ?>
<?= $this->section('content') ?>
		
		
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Thêm tài khoản</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="students.html">Tài khoản</a></li>
									<li class="breadcrumb-item active">Thêm tài khoản</li>
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
												<h5 class="form-title"><span>Thông tin người dùng</span></h5>
											</div>
											<div class="col-12 col-sm-6">  
												<div class="form-group">
													<label>Tài khoản</label>
													<input type="text" class="form-control" name="username" required>
												</div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Mật khẩu</label>
													<input type="password" class="form-control" name="password" required>
												</div>
											</div>
											<div class="col-12 col-sm-6">  
												<div class="form-group">
													<label>Tên</label>
													<input type="text" class="form-control" name="first_name">
												</div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Họ</label>
													<input type="text" class="form-control" name="last_name">
												</div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Số điện thoại</label>
													<input type="text" class="form-control" name="phone_number" required>
												</div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Quyền</label>
													<select class="form-control" name="role">
														<option value="client">Khách hàng</option>
														<option value="admin" >Quản trị viên</option>
														<option value="employee" >Nhân viên</option>

														
													  </select>
												</div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Email</label>
													<input type="text" class="form-control" name="email" required>
												</div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Địa chỉ</label>
													<input type="text" class="form-control" name="address" required>
												</div>
											</div>
											<div class="col-12">
												<p name="message" style="color:red; font-size:85%; text-align:center;"><?php echo $message?></p>
											</div>
											<div class="col-12">
												<button type="submit" class="btn btn-primary">Tạo tài khoản</button>
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