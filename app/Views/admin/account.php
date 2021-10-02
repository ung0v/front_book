<?= $this->extend('admin/_head') ?>
<?= $this->section('content') ?>
	
	
				
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Tài khoản</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Tài khoản</li>
								</ul>
							</div>
							<div class="col-auto text-right float-right ml-auto">
								<a href="#" class="btn btn-outline-primary mr-2"><i class="fas fa-download"></i> Download</a>
								<a href="<?= base_url() ?>/public/admin/account/add" class="btn btn-primary"><i class="fas fa-plus"></i></a>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
				
					<div class="row">
						<div class="col-sm-12">
						
							<div class="card card-table">
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-hover table-center mb-0 datatable" id="dtBasicExample">
											<thead>
												<tr>
													<th>STT</th>
													<th>Tên</th>
													<th>Email</th>
													<th>Quyền</th>
													<th>Tình trạng</th>
													<th>Ngày tạo</th>
													<th>Địa chỉ</th>
													<th class="text-right">Action</th>
												</tr>
											</thead>
											<tbody>
											<?php $count = 0;?>
											<?php foreach($account as $row):
													$count++
												?>
												<tr>
													<td><?= $count ?></td>
													<td>
														<h2 class="table-avatar">
															<!-- <a href="student-details.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-10.jpg" alt="User Image"></a> -->
															<a href="<?= base_url().'/public/admin/account/detail?id='.$row['id']?>"><?= $row['username'] ?></a>
														</h2>
													</td>
													<td><?= $row['email'] ?></td>
													<?php if ($row['role'] == 'admin'): ?>
														<td>Quản trị viên</td>
													<?php elseif ($row['role'] == 'employee'): ?>
													<td>Nhân viên</td>
													<?php else: ?>
														<td>Khách hàng</td>
													<?php endif; ?>
													<td><?= $row['status'] ?></td>
													<td><?= $row['created_at'] ?></td>
													<td><?= $row['address'] ?></td>
													<td class="text-right">
														<div class="actions">
															<a href="<?= base_url().'/public/admin/account/edit?id='.$row['id']?>" class="btn btn-sm bg-success-light mr-2">
																<i class="fas fa-pen"></i>
															</a>
															<a href="<?= base_url().'/public/admin/account/delete?id='.$row['id']?>" class="btn btn-sm bg-danger-light">
																<i class="fas fa-trash"></i>
															</a>
														</div>
													</td>
												</tr>
											<?php endforeach; ?>
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