<?= $this->extend('admin/_head') ?>
<?= $this->section('content') ?>
		
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Danh sách đơn hàng</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Đơn hàng</a></li>
									<li class="breadcrumb-item active">Danh sách đơn hàng</li>
								</ul>
							</div>
							<div class="col-auto text-right float-right ml-auto">
								<a href="#" class="btn btn-outline-primary mr-2"><i class="fas fa-download"></i> Download</a>
								<a href="add-fees-collection.html" class="btn btn-primary"><i class="fas fa-plus"></i></a>
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
													<th>STT</th>
													<th>Người dùng</th>
													<th>Tổng tiền</th>
													<th>Tình trạng</th>
													<th>Ngày tạo</th>
													<th>Số điện thoại</th>
													<th>Ngày giao hàng</th>
													<th class="text-right">Thao tác</th>
												</tr>
											</thead>
											<tbody>
											<?php $count = 0;?>
											<?php foreach($order as $row):
													$count++
												?>
												<tr>
													<td><?= $count?></td>
													<td>
														<h2 class="table-avatar">
															<a><?= $user[array_search($row['user_id'], array_column($user, 'id'))]['username']?></a>
														</h2>
													</td>
													<td><?= number_format($row['total'], 0, '', ',')?> VND</td>
													<td><?php if($row['payment_status'] == 1){
														echo '<span class="badge badge-success">Đã thanh toán</span>';
													} else {
														echo '<span class="badge badge-danger">Chưa thanh toán</span>';
													}?></td>
													<td><?= $row['created_at']?></td>
													<td><?= $user[array_search($row['user_id'], array_column($user, 'id'))]['phone_number']?></td>
													<td><?= $shipping_note[array_search($row['id'], array_column($shipping_note, 'order_id'))]['delivery_date']?></td>
													<td class="text-right">
														<div class="actions">
															<a href="<?= base_url().'/public/admin/order/edit?id='.$row['id']?>" class="btn btn-sm bg-success-light mr-2">
																<i class="fas fa-pen"></i>
															</a>
															<a href="<?= base_url().'/public/admin/order/delete?id='.$row['id']?>" class="btn btn-sm bg-danger-light">
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