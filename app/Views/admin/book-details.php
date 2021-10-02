<?= $this->extend('admin/_head') ?>
<?= $this->section('content') ?>
	
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Thông tin về sách</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="teachers.html">Sách</a></li>
									<li class="breadcrumb-item active">Thông tin về Sách</li>
								</ul>
							</div>
						</div>
					</div>
					
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-md-12">
									<div class="about-info">
										<h4><?= $product['name']?></h4>	
										
										
								<div class="media">	
                                <div id="carouselExampleIndicators" class="carousel slide col-md-4" data-ride="carousel">
                                    <div class="carousel-inner" role="listbox">
                                         <div class="carousel-item active"> <img class="img-fluid"
                                         src="<?= str_replace('quantri','QuanTri',$product['image'])?>" style="width:400px !important; height:450px !important"> </div>
										 <?php foreach($image as $row):?>
											<div class="carousel-item"> <img class="img-fluid"
                                                src="<?= str_replace('quantri','QuanTri',$row['image'])?>" style="width:400px !important; height:450px !important"> </div>
											<?php endforeach;?>
                                    
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                        data-slide="prev"> <span class="carousel-control-prev-icon"
                                            aria-hidden="true" ></span> <span class="sr-only">Previous</span> </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                        data-slide="next"> <span class="carousel-control-next-icon"
                                            aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                                </div>
								
											
											<div class="media-body">
												<ul>
                                                    <li>
                                                        <span class="title-span">Tên sách: </span>
                                                        <span class="info-span"><?= $product['name']?></span>
                                                    </li>
                                                    <li>
                                                        <span class="title-span">Tác giả : </span>
                                                        <span class="info-span"><?= $product['author']?></span>
                                                    </li>
                                                    <li>
                                                        <span class="title-span">Thể loại : </span>
                                                        <span class="info-span"><?= $category['name']?></span>
                                                    </li>
                                                    <li>
                                                        <span class="title-span">Giá : </span>
                                                        <span class="info-span"><?= $product['price']?> VND</span>
                                                    </li>
                                                    <li>
                                                        <span class="title-span">SKU : </span>
                                                        <span class="info-span"><?= $product['SKU']?></span>
                                                    </li>
													<li>
                                                        <span class="title-span">Số lượng : </span>
                                                        <span class="info-span"><?= $product['quantity']?></span>
                                                    </li>
													<li>
                                                        <span class="title-span">Mức giảm giá : </span>
                                                        <span class="info-span"><?= $product['discount_id']?></span>
                                                    </li>
                                                    <li>
                                                        <span class="title-span">Ngày tạo : </span>
                                                        <span class="info-span"><?= $product['created_at']?></span>
                                                    </li>
                                                </ul>
											</div>
										</div>

										
										<div class="p-5">
										<div class="row follow-sec">
                                            <div class="col-md-4 mb-3">
                                                <div class="blue-box">
                                                    <h3>2850</h3>
                                                    <p>Followers</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="blue-box">
                                                    <h3>2050</h3>
                                                    <p>Following</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="blue-box">
                                                    <h3>2950</h3>
                                                    <p>Friends</p>
                                                </div>
                                            </div>
										</div>
										</div>
										
									</div>
								</div>								
							</div>

							<div class="row mt-2">
								<div class="col-md-12">
									<div class="skill-info">
										<h4>Giới thiệu</h4>
										
										<div class="row mt-3">
											<div class="col-md-12">
												<?= $product['description']?>
											</div>                                            
										</div>
										
										<!-- <div class="row mt-3">
											<div class="col-md-12">
												<h5>Certificates</h5>
												<p class="mt-3">1st Prise in Running Competition.</p>
												<p>Lorem Ipsum is simply dummy text.</p>
												<p>Won overall star student in higher secondary education.</p>
												<p>Lorem Ipsum is simply dummy text.</p>
											</div>                                            
                                        </div> -->
									</div>
								</div>
							</div>

							<!-- <div class="row mt-2">
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
							</div> -->
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
		<!-- <script  src="assets/js/script.js"></script> -->
		<?= $this->endSection() ?>