<?= $this->extend('admin/_head') ?>
<?= $this->section('content') ?>
			
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Thông tin đơn nhập hàng</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="subjects.html">Nhập hàng</a></li>
									<li class="breadcrumb-item active">Thông tin đơn nhập hàng</li>
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
												<h5 class="form-title"><span>Thông tin đơn nhập hàng</span></h5>
											</div>
                                            <div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Nhà cung cấp</label>
													<input type="text" class="form-control" name="discount_name" value="<?= $supplier[array_search($imports['supplier_id'], array_column($supplier, 'id'))]['name']?>" readonly>
												</div>
                                                <div class="form-group">
													<label>Ngày tạo</label>
													<input type="text" class="form-control" name="discount_name" value="<?= $imports['created_at']?>" readonly>
												</div>
											</div>
                                            <div class="col-12">
												<h5 class="form-title"><span>Thong tin</span></h5>
											</div>
                                            <div class="col-12">
                                            <div class="form-group">
                                                
                                                <label class="col-sm-12">Chi tiết đơn hàng</label>
                                                <div class="table-responsive">
                                                    <table class="table table-hover table-center mb-0 datatable">
                                                        <thead>
                                                            <tr>
                                                                <th>Mã sản phẩm</th>
                                                                <th>Tên sản phẩm</th>
                                                                <th>Số lượng</th>
                                                                <th>Chi phí</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php $total = 0;?>
                                                        <?php foreach($items as $row):
                                                                $total = $total + $row['total'];
                                                            ?>
                                                            <tr>
                                                                <td><?= $row['product_id']?></td>
                                                                <td><?= $product[array_search($row['product_id'], array_column($product, 'id'))]['name'] ?></td>
                                                                <td><?= $row['quantity']?></td>
                                                                <td><?= number_format($row['total'], 0, '', ',')?></td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <label class="col-sm-12">Tổng tiền: 
                                                <?php
                                                        echo number_format($total, 0, '', ',');
                                                ?>    
                                                VND</label>
											
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
        <script src="<?= base_url().'/public/admin/assets/js/assets/cart.js'?>"></script>
<?= $this->endSection() ?>