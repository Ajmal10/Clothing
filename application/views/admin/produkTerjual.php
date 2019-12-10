	<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>Clothing Store</h4>

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

			</div>
		</div>
	</section>
	<!-- Category section end -->
	<section class="top-letest-product-section">
		<div class="container">
			<div class="section-title">
				<h2>LATEST PRODUCTS</h2>
			</div>
			<div class="product-slider owl-carousel">

					<?php foreach($barang as $brg) : ?>
				<div class="product-item">
					<div class="pi-pic">
						<img src="<?= base_url('') ?>assets/img/product/<?= $brg->image ?>" >
						
					</div>
					<div class="pi-text">
						<h6>$<?= $brg->harga ?></h6>
						<p><?= $brg->nama ?> </p>
						<p>Terjual : <?= $brg->terjual ?></p>
						<p>Stok Barang : <?=$brg->stok_barang ?></p>
					</div>
				</div>
				<?php endforeach ?>
			</div>
		</div>
	</section>

