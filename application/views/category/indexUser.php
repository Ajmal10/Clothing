


	<!-- Category section -->
	<section class="category-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 order-2 order-lg-1">
					<div class="filter-widget">
						<h2 class="fw-title">Kategori</h2>
						<ul class="category-menu">
							<li><a href="<?= base_url('');?>category/indexUser">Semua</a></li>
							<li><a href="<?= base_url('');?>category/pakaian_atasan_user">Atasan</a></li>
							<li><a href="<?= base_url('');?>category/pakaian_bawahan_user">Bawahan</a></li>
						</ul>
					</div>
				</div>

					<div class="col-lg-9  order-1 order-lg-2 mb-5 mb-lg-0">
						<div class="row">
						<?php foreach ($barang as $brg) : ?>
							<form action="<?= base_url('user/tambah_ke_keranjang/'); ?>" method="post">
								<div class="product-item">
									<div class="pi-pic">
										<a href="<?= base_url(''); ?>product/detail_user/<?= $brg->id ?>">	
											<img src="<?= base_url('') ?>assets/img/product/<?= $brg->image ?>" style="width: 250px;height: 250px;" >
										</a>
										<div class="pi-links">
											<button title="Add To Cart" type="submit" class="add-card"><i class="flaticon-bag"></i></button>
										</div>
									</div>
									<div class="pi-text">
										<h6><?= $brg->harga ?></h6>
										<p>Rp.<?= $brg->nama ?> </p>
									</div>
								</div>
								<input type="hidden" name="id" value="<?php echo $brg->id ?>" />
								<input type="hidden" name="nama" value="<?php echo $brg->nama ?>" />
								<input type="hidden" name="harga" value="<?php echo $brg->harga ?>" />
								<input type="hidden" name="gambar" value="<?php echo $brg->image ?>" />
							</form>
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

