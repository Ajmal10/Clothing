


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
						<div class="section-title">
							<h2>Produk Terjual</h2>
						</div>
							<div class="row mt-5">
								<?php foreach($barang as $brg) :?>
								<div class="col-lg-4 col-sm-6">
									<div class="product-item">
										<div class="pi-pic">
											<img src="<?= base_url('') ?>assets/img/product/<?= $brg->image ?>" width="250px" >
											<div class="pi-links">
												<a href="<?= base_url('');?>home/troli/<?= $brg->id ?>" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
												<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
											</div>
										</div>
										<div class="pi-text">
											<h6><?= $brg->harga ?></h6>
											<p><?= $brg->nama ?> </p>
										</div>
									</div>
								</div>
								<?php endforeach ?>
								
								<div class="text-center w-100 pt-3">
									<button class="site-btn sb-line sb-dark">LOAD MORE</button>
								</div>
							</div>
					</div>
				</div>
			</div>
	</section>
	<!-- Category section end -->

