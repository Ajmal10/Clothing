	<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>Clothing Store</h4><br>
				<h5>Profil Admin</h5>
				<div class="row">
					<div class="col-sm-2">
						<img src="<?= base_url('assets/');?>img/product/anonymous.png" width="120">
					</div>
					
					<div class="col-sm-6">
						<form>
						  <div class="form-group">
						    <label for="formGroupExampleInput">Nama</label>
						    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
						  </div>
						  <div class="form-group">
						    <label for="formGroupExampleInput2">Alamat</label>
						    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="">
						  </div>
						  <div class="form-group">
						    <label for="formGroupExampleInput2">Email</label>
						    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="">
						  </div>
						  <a href="#" class="btn btn-info">Edit</a>
						</form>
					</div>	
				</div>
		</div>
	</div>
	<!-- Page info end -->


	<!-- Category section -->
	<section class="category-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 order-2 order-lg-1">
					<div class="filter-widget">
						<h2 class="fw-title">Etalase Toko</h2>
						<ul class="category-menu">
							<li><a href="<?= base_url()?>admin/index">Semua Produk</a></li>
							<li><a href="<?= base_url()?>admin/produkTerjual">Produk Terjual</a></li>
							<li><a href="<?= base_url()?>admin/kelola">Tambah Produk</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-9  order-1 order-lg-2 mb-5 mb-lg-0">
					<div class="row">
						<div class="col">
							<div class="product-slider owl-carousel">
								<?php foreach($barang as $brg) :?>
									<div class="product-item">
										<div class="pi-pic">
											<a href="<?= base_url('') ?>admin/detail/<?= $brg->id ?>">
											<img src="<?= base_url('') ?>assets/img/product/<?= $brg->image ?>">
											</a>
										</div>
										<div class="pi-text">
											<h6>$<?= $brg->harga ?></h6>
											<p><?= $brg->nama ?> </p>
										</div>
									</div>

								<?php endforeach ?>
							</div>
						
						<div class="text-center w-100 pt-3">
							<button class="site-btn sb-line sb-dark">LOAD MORE</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Category section end -->

