<?= $this->extend('admin/_head') ?>
<?= $this->section('content') ?>
			
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Thêm đơn hàng</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="subjects.html">Đơn hàng</a></li>
									<li class="breadcrumb-item active">Thêm đơn hàng</li>
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
												<h5 class="form-title"><span>Thông tin đơn hàng</span></h5>
											</div>
                                            <div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Nhà vận chuyển </label>
													<select class="form-control" name="shipping_id">
                                                        <?php foreach($shipping as $row):?>
                                                            <option value="<?= $row['id']?>"><?= $row['name']?></option>
                                                        <?php endforeach?>
													</select>
												</div>
                                            </div>
                                            <div class="col-12 col-sm-6">  
												<div class="form-group">
													<label>Phí vận chuyển</label>
													<select class="form-control" name="delivery_cost">
                                                        <option value="0">Free Ship</option>
                                                        <option value="30000"><?= number_format(30000, 0, '', ',')?> VND</option>
                                                    </select>
												</div>
											</div>
                                            <div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Tình trạng</label>
													<select class="form-control" name="payment_status">
                                                            <option value="1">Đã thanh toán</option>
                                                            <option value="0">Chưa thanh toán</option>
													</select>
												</div>
                                            </div>
                                            <div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Người mua</label>
													<select class="form-control" name="user_id">
                                                        <?php foreach($user as $row):?>
                                                            <option value="<?= $row['id']?>"><?= $row['email']?></option>
                                                        <?php endforeach?>
													</select>
												</div>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <div class="form-group">
                                                <label>Ngày giao hàng</label>
                                                <input type="date" class="form-control" name="delivery_date">
                                                </div>
                                            </div>
                                            <div class="col-12">
												<h5 class="form-title"><span>Giỏ hàng</span></h5>
											</div>
                                            <div class="col-12">
                                            <div class="form-group">
                                                <label class="col-sm-12">Danh sách sản phẩm</label>
                                                    <div class="col-md-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div id="education_fields"></div>
                                                                <div class="row">
                                                                    <div class="nopadding" id="loop_product">
                                                                        <div class="form-group">
                                                                            <!-- <input type="text" class="form-control" id="Schoolname" name="name[]" value="" placeholder="Name"> -->
                                                                            <select name="name[]" class='form-control'>
                                                                            <?php foreach($product as $item):?>
                                                                                <option value="<?= $item['id'] ?>"><?= $item['name']?></option>
                                                                            <?php endforeach;?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-2 nopadding">
                                                                        <div class="form-group">
                                                                            <input type="number" min="1" class="form-control" id="Major" name="value[]" value="" placeholder="số lượng">
                                                                        </div>
                                                                    </div>
                                                                    <div class="input-group-append" style="height: 40px;">
                                                                        <button class="btn btn-success" type="button" onclick="education_fields();"><i class="fa fa-plus"></i></button>
                                                                    </div>                                                            
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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
        <script src="<?= base_url().'/public/admin/assets/js/assets/cart.js'?>"></script>
<?= $this->endSection() ?>