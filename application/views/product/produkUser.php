	<!-- product section -->
	<section class="product-section">
		<div class="container">
			<div class="row">
				<?php foreach($barang as $brg) :?>
					<div class="col-lg-6">
						<form action="<?= base_url('user/tambah_ke_keranjang/'); ?>" method="post">
					<div class="product-pic-zoom">
						<img class="product-big-img" src="<?= base_url('') ?>assets/img/product/<?= $brg->image ?>" alt="">
					</div>
					<div class="product-thumbs" tabindex="1" style="overflow: hidden; outline: none;">
						<div class="product-thumbs-track">
							<div class="pt active" data-imgbigurl="img/single-product/1.jpg"><img src="<?= base_url('') ?>assets/img/product/<?= $brg->image ?>" alt=""></div>
							<!-- <div class="pt" data-imgbigurl="<?= base_url('assets/');?>img/single-product/2.jpg"><img src="<?= base_url('assets/');?>img/single-product/thumb-2.jpg" alt=""></div>
							<div class="pt" data-imgbigurl="<?= base_url('assets/');?>img/single-product/3.jpg"><img src="<?= base_url('assets/');?>img/single-product/thumb-3.jpg" alt=""></div>
							<div class="pt" data-imgbigurl="<?= base_url('assets/');?>img/single-product/4.jpg"><img src="<?= base_url('assets/');?>img/single-product/thumb-4.jpg" alt=""></div> -->
						</div>
					</div>
				</div>
	
				<div class="col-lg-6 product-details">
					<h2 class="p-title"><?= $brg->nama ?></h2>
					<h3 class="p-price">Rp. <?= number_format( $brg->harga, 0,',','.') ?></h3>
					<h4 class="p-stock">Available: <?= $brg->stok_barang ?> <span>In Stock</span></h4>
					<div class="p-rating">
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o fa-fade"></i>
					</div>
					<div class="fw-size-choose">
						<p>Size</p>
						<div class="sc-item">
							<input type="radio" name="sc" id="xs-size">
							<label for="xs-size">S</label>
						</div>
						<div class="sc-item">
							<input type="radio" name="sc" id="s-size">
							<label for="s-size">M</label>
						</div>
						<div class="sc-item">
							<input type="radio" name="sc" id="m-size" checked="">
							<label for="m-size">L</label>
						</div>
						<div class="sc-item">
							<input type="radio" name="sc" id="l-size">
							<label for="l-size">XL</label>
						</div>
						<div class="sc-item disable">
							<input type="radio" name="sc" id="xl-size" disabled>
							<label for="xl-size">XXL</label>
						</div>
					</div>
					<div class="quantity">
						<p>Quantity</p>
                        <div class="pro-qty"><input type="text" value="1"></div>
					</div>
					<input type="hidden" name="id" value="<?php echo $brg->id ?>" />
					<input type="hidden" name="nama" value="<?php echo $brg->nama ?>" />
					<input type="hidden" name="harga" value="<?php echo $brg->harga ?>" />
					<input type="hidden" name="gambar" value="<?php echo $brg->image ?>" />
					<button title="SHOP NOW" type="submit" class="site-btn">SHOP NOW</button>
				</form>
					<div id="accordion" class="accordion-area">
						<div class="panel">
							<div class="panel-header" id="headingOne">
								<button class="panel-link active" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">information</button>
							</div>
							<div id="collapse1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
								<div class="panel-body">
									<p><?= $brg->deskripsi?></p>
								</div>
							</div>
						</div>
						<div class="panel">
							<div class="panel-header" id="headingTwo">
								<button class="panel-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">care details </button>
							</div>
							<div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
								<div class="panel-body">
									<img src="<?= base_url('assets/');?>img/cards.png" alt="">
								</div>
							</div>
						</div>
						<div class="panel">
							<div class="panel-header" id="headingThree">
								<button class="panel-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">shipping & Returns</button>
							</div>
							<div id="collapse3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
								<div class="panel-body">
									<h4>7 Days Returns</h4>
									<p>Cash on Delivery Available<br>Home Delivery <span>3 - 4 days</span></p>

								</div>
							</div>
						</div>
					</div>
					<div class="social-sharing">
						<a href=""><i class="fa fa-google-plus"></i></a>
						<a href=""><i class="fa fa-pinterest"></i></a>
						<a href=""><i class="fa fa-facebook"></i></a>
						<a href=""><i class="fa fa-twitter"></i></a>
						<a href=""><i class="fa fa-youtube"></i></a>
					</div>
				</div>
				<?php endforeach ?>
			
			</div>
		</div>
	</section>
	<!-- product section end -->

