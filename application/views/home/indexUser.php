<!-- Hero section -->
<section class="hero-section">
	<div class="hero-slider owl-carousel">
		<div class="hs-item set-bg" data-setbg="<?= base_url('assets/img/bg.jpg') ?>">
			<div class="container">
				<div class="row">
					<div class="col-xl-6 col-lg-7 text-white">
						<span>New Arrivals</span>
						<h2>denim jackets</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
							labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo
							viverra maecenas accumsan lacus vel facilisis. </p>
						<a href="#" class="site-btn sb-line">DISCOVER</a>
						<a href="<?= base_url(''); ?>troli" class="site-btn sb-white">ADD TO CART</a>
					</div>
				</div>
				<div class="offer-card text-white">
					<span>from</span>
					<h2>$29</h2>
					<p>SHOP NOW</p>
				</div>
			</div>
		</div>
		<div class="hs-item set-bg" data-setbg="<?= base_url('assets/img/bg-2.jpg') ?>">
			<div class="container">
				<div class="row">
					<div class="col-xl-6 col-lg-7 text-white">
						<span>New Arrivals</span>
						<h2>denim jackets</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
							labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo
							viverra maecenas accumsan lacus vel facilisis. </p>
						<a href="#" class="site-btn sb-line">DISCOVER</a>
						<a href="<?= base_url('aplication/views/troli/index.php') ?>" class="site-btn sb-white">ADD TO
							CART</a>
					</div>
				</div>
				<div class="offer-card text-white">
					<span>from</span>
					<h2>$29</h2>
					<p>SHOP NOW</p>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="slide-num-holder" id="snh-1"></div>
	</div>
</section>
<!-- Hero section end -->


<!-- letest product section -->
<section class="top-letest-product-section">
	<div class="container">
		<div class="section-title">
			<h2>LATEST PRODUCTS</h2>
		</div>
		<div class="product-slider owl-carousel">
			<?php foreach ($barang as $brg) : ?>
				<form action="<?= base_url('user/tambah_ke_keranjang/'); ?>" method="post">
					<div class="product-item">
						<div class="pi-pic">
							<a href="<?= base_url(''); ?>product/detail_user/<?= $brg->id ?>">	
								<img src="<?= base_url('') ?>assets/img/product/<?= $brg->image ?>" style="width: 250px;height: 250px;" >
							</a>
							<div class="pi-links">
								<button title="Add To Cart" type="submit" class="add-card"><i class="flaticon-bag"></i></button>
								<!-- <button type="button" class="wishlist-btn"><i class="flaticon-heart"></i></button> -->
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
		</div>
	</div>
</section>


<!-- Banner section -->
<section class="banner-section">
	<div class="container">
		<div class="banner set-bg" data-setbg="<?= base_url('assets/') ?>img/banner-bg.jpg">
			<div class="tag-new">NEW</div>
			<span>New Arrivals</span>
			<h2>STRIPED SHIRTS</h2>
			<a href="#" class="site-btn">SHOP NOW</a>
		</div>
	</div>
</section>
<!-- Banner section end  -->



