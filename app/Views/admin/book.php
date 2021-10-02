<?= $this->extend('admin/_head') ?>
<?= $this->section('content') ?>
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Sản phẩm</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Quản lý</a></li>
									<li class="breadcrumb-item active">Sản phẩm</li>
								</ul>
							</div>
							<div class="col-auto text-right float-right ml-auto">
								<a href="#" class="btn btn-outline-primary mr-2"><i class="fas fa-download"></i> Download</a>
								<a href="<?= base_url() ?>/public/admin/book/add" class="btn btn-primary"><i class="fas fa-plus"></i></a>
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
													<th>Name</th>
													<th>SKU</th>
													<th>Thể loại</th>
													<th>Số lượng</th>
													<th>Giá</th>
													<th>Giảm giá</th>
													<th>Ngày tạo</th>
													<th class="text-right">Action</th>
												</tr>
											</thead>
											<tbody>
											<?php $count = 0;?>
											<?php foreach($product as $row):
													$count++
												?>
												<tr>
													<td><?= $count?></td>
													<td>
														<h2 class="table-avatar">
															<a href="<?= base_url() ?>/public/admin/book/detail?id=<?= $row->id?>" class="avatar avatar-sm mr-2"><img class="avatar-img" src="<?= str_replace('quantri','QuanTri',$row->image)?>"></a>
															<a href="<?= base_url() ?>/public/admin/book/detail?id=<?= $row->id?>"><?=$row->name?></a>
														</h2>
													</td>
													<td><?=$row->SKU?></td>
													<td><?= $row->category?></td>
													<td><?= $row->quantity?></td>
													<td><?= $row->price?></td>
													<td><?= $row->discount?>%</td>
													<td><?= $row->created_at?></td>
													<td class="text-right">
														<div class="actions">
															<!-- <a href="edit-teacher.html" class="btn btn-sm bg-success-light mr-2">
																<i class="fas fa-pen"></i>
															</a> -->
															<a href="<?= base_url() ?>/public/admin/book/delete?id=<?= $row->id?>" class="btn btn-sm bg-danger-light">
																<i class="fas fa-trash"></i>
															</a>
														</div>
													</td>
												</tr>
											<?php endforeach;?>
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