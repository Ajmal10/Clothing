


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
							<li><a href="<?= base_url()?>admin/invoice">Inovice Penjualan</a></li>
						</ul>
					</div>
				</div>

					<div class="col-lg-9  order-1 order-lg-2 mb-5 mb-lg-0">
						<div class="row mt-5">
								<?php foreach($barang as $brg) :?>
								<div class="col-lg-4 col-sm-6">
									<div class="product-item">
										<div class="pi-pic mt-5">
											<img src="<?= base_url('') ?>assets/img/product/<?= $brg->image ?>" style="width: 250px;height: 250px;">
											<div class="pi-links">
												<a href="<?= base_url('');?>admin/ubah/<?= $brg->id ?>" class="add-card"><i class="flaticon-edit"></i><span>Edit</span></a>
												<a href="<?= base_url('');?>admin/hapus/<?= $brg->id ?>" class="wishlist-btn"><i class="flaticon-garbage"></i></a>
											</div>
										</div>
										<div class="pi-text">
											<h6>Rp.<?= number_format( $brg->harga, 0,',','.')?></h6>
											<p><?= $brg->nama ?> </p>
											<p>Stok Barang :<?= $brg->stok_barang ?></p>
											<p>Terjual :<?= $brg->terjual ?></p>
										</div>
									</div>
								</div>
								<?php endforeach ?>
								
								<div class="text-center w-100 pt-3 mt-5">
									<button class="site-btn sb-line sb-dark">LOAD MORE</button>
								</div>
						</div>
					</div>
				</div>
			</div>
	</section>
	<!-- Category section end -->

