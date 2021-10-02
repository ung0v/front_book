<?= $this->extend('admin/_head') ?>
<?= $this->section('content') ?>
		
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Chi tiết tài khoản</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="students.html">Tài khoản</a></li>
									<li class="breadcrumb-item active">Chi tiết tài khoản</li>
								</ul>
							</div>
						</div>
					</div>
					
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-md-12">
									<div class="about-info">
										<h4>About Me</h4>
										
										<div class="media mt-3">
											<img src="<?= base_url() ?>/public/admin/assets/img/download.png" class="mr-3" alt="...">
											<div class="media-body">
												<ul>
													<li>
                                                        <span class="title-span">Id: </span>
                                                        <span class="info-span"><?php echo $user['id'] ?></span>
                                                    </li>
                                                    <li>
                                                        <span class="title-span">Username: </span>
                                                        <span class="info-span"><?php echo $user['username'] ?></span>
                                                    </li>
                                                    <li>
                                                        <span class="title-span">Tên : </span>
                                                        <span class="info-span"><?php echo $user['first_name'] ?></span>
                                                    </li>
                                                    <li>
                                                        <span class="title-span">Họ : </span>
                                                        <span class="info-span"><?php echo $user['last_name'] ?></span>
                                                    </li>
                                                    <li>
                                                        <span class="title-span">Email : </span>
                                                        <span class="info-span"><?php echo $user['email'] ?></span>
                                                    </li>
                                                    <li>
                                                        <span class="title-span">Số điện thoại : </span>
                                                        <span class="info-span"><?php echo $user['phone_number'] ?></span>
                                                    </li>
													<li>
                                                        <span class="title-span">Địa chỉ : </span>
                                                        <span class="info-span"><?php echo $user['address'] ?></span>
                                                    </li>
                                                    <li>
                                                        <span class="title-span">Quyền : </span>
                                                        <span class="info-span"><?php echo $user['role'] ?></span>
                                                    </li>
                                                </ul>
											</div>
										</div>
										
										<div class="row follow-sec">
                                            <div class="col-md-4 mb-3">
                                                <div class="blue-box">
                                                    <h3><?php echo $user['created_at'] ?></h3>
                                                    <p>Ngày tạo</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="blue-box">
                                                    <h3><?php if ($user['status'] == 1){
														echo 'Đã kích hoạt';
													} else {
														echo 'Chưa kích hoạt';
													}?></h3>
                                                    <p>Trạng thái</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="blue-box">
                                                    <h3>2950</h3>
                                                    <p>Đơn hàng đã mua</p>
                                                </div>
                                            </div>
										</div>
										
										<!-- <div class="row mt-2">
											<div class="col-md-12">
												<h5>Permanent Address</h5>
												<p>480, Estern Avenue, Courtage area, New York</p>
											</div>                                            
                                        </div>

                                        <div class="row mt-2">
											<div class="col-md-12">
												<h5>Present Address</h5>
												<p>480, Estern Avenue, Courtage area, New York</p>
											</div>                                            
                                        </div> -->
									</div>
								</div>								
							</div>

							<!-- <div class="row mt-2">
								<div class="col-md-12">
									<div class="skill-info">
										<h4>Skills</h4>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry, simply dummy text of the printing and typesetting industry</p>
										
										<ul>
                                            <li>
                                                <label>Lorem Ipsum is simply</label>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                                </div>
                                            </li>

                                            <li>
                                                <label>Lorem Ipsum is simply</label>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100" style="width: 69%"></div>
                                                </div>
                                            </li>

                                            <li>
                                                <label>Lorem Ipsum is simply</label>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%"></div>
                                                </div>
                                            </li>

                                            <li>
                                                <label>Lorem Ipsum is simply</label>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%"></div>
                                                </div>
                                            </li>                                            
										</ul>
										
										<div class="row mt-3">
											<div class="col-md-12">
												<h5>Education</h5>
												<p class="mt-3">Secondary Schooling at xyz school of secondary education, Mumbai.</p>
												<p>Higher Secondary Schooling at xyz school of higher secondary education, Mumbai.</p>
												<p>Bachelor of Science at Abc College of Art and Science, Chennai.</p>
												<p>Master of Science at Cdm College of Engineering and Technology, Pune.</p>
											</div>                                            
										</div>
										
										<div class="row mt-3">
											<div class="col-md-12">
												<h5>Certificates</h5>
												<p class="mt-3">1st Prise in Running Competition.</p>
												<p>Lorem Ipsum is simply dummy text.</p>
												<p>Won overall star student in higher secondary education.</p>
												<p>Lorem Ipsum is simply dummy text.</p>
											</div>                                            
                                        </div>
									</div>
								</div>
							</div>

							<div class="row mt-2">
								<div class="col-md-12">
									<div class="skill-info">
										<h4>Settings</h4>

										<form>
											<div class="row mt-3">
												<div class="col-12 col-sm-6">  
													<div class="form-group">
														<label>Username</label>
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="col-12 col-sm-6">  
													<div class="form-group">
														<label>Current Password</label>
														<input type="password" class="form-control">
													</div>
												</div>
												<div class="col-12 col-sm-6">  
													<div class="form-group">
														<label>New Password</label>
														<input type="password" class="form-control">
													</div>
												</div>
												<div class="col-12">
													<button type="submit" class="btn btn-primary">Submit</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>				
				</div>
				 -->
				
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
		<!-- <script  src="assets/js/script.js"></script> -->
		
		<?= $this->endSection() ?>