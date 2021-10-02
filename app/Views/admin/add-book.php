<?= $this->extend('admin/_head') ?>
<?= $this->section('content') ?>
				
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Thêm sách</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="teachers.html">Sách</a></li>
									<li class="breadcrumb-item active">Thêm sách</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
				
					<div class="row">
						<div class="col-sm-12">
						
							<div class="card">
								<div class="card-body">
									<form method="POST" enctype="multipart/form-data">
										<div class="row">
											<div class="col-12">
												<h5 class="form-title"><span>Thông tin về sách</span></h5>
											</div>
											<div class="col-12 col-sm-6">  
												<div class="form-group">
													<label>Tên</label>
													<input type="text" class="form-control" name="product_name">
												</div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Tác giả</label>
													<input type="text" class="form-control" name="product_author">
												</div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Thể loại</label>
													<select class="form-control" name="product_category">
													<?php foreach($category as $row): ?>

														<option value="<?= $row['id']?>"><?= $row['name']?></option>
													<?php endforeach;?>
													</select>
												</div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>SKU</label>
													<input type="text" class="form-control" name="product_sku">
												</div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Giá</label>
													<input type="text" class="form-control" name="product_price">
												</div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Khuyến mại</label>
													<select class="form-control" name="product_discount">
													<?php foreach($discount as $row): ?>

														<option value="<?= $row['id']?>"><?= $row['name']?> - <?= $row['discount_percent']?>%</option>
													<?php endforeach;?>
													</select>
												</div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Số lượng</label>
													<input class="form-control" type="text" readonly>
												</div>
											</div>
											<div class="col-12">
												<h5 class="form-title"><span>Ảnh</span></h5>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Ảnh chính</label>
													<input type="file" class="form-control" name="fileToUpload" id="fileToUpload">
												</div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Ảnh phụ</label>
													<input type="file" class="form-control" name ='images[]' multiple/>
												</div>
											</div>
											<div class="col-12">
												<h5 class="form-title"><span>Mô tả</span></h5>
											</div>
											<div class="col-12">
												<div class="form-group">
													<label>Mô tả</label>
													<textarea class="form-control" type="text" id="editor" name="product_desc"></textarea>
												</div>
											</div>
											<script>
												ClassicEditor
													.create( document.querySelector( '#editor' ) )
													.catch( error => {
														console.error( error );
													} );
											</script>
											<div class="col-12">
												<p name="message" style="color:red; font-size:70%; text-align:center;"><?php echo $message?></p>
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
				
			<!-- /Page Wrapper -->
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <!-- <script src="assets/js/jquery-3.5.1.min.js"></script>
		
		Bootstrap Core JS
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> -->
		
		<!-- Slimscroll JS -->
        <!-- <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>		 -->
		
		<!-- Custom JS -->
		<!-- <script src="assets/js/script.js"></script> --> 
		<?= $this->endSection() ?>