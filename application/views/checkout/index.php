	<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>Your cart</h4>
			<div class="site-pagination">
				<a href="">Home</a> /
				<a href="">Your cart</a>
			</div>
		</div>
	</div>
	<!-- Page info end -->


	<!-- checkout section  -->
	<section class="checkout-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 order-2 order-lg-1">
					<form class="checkout-form" action="<?= site_url('user/insert') ?>" enctype="multipart/form-data" method="post">
						<div class="cf-title">Billing Address</div>
						<div class="row">
							<!-- <div class="col-md-7">
								<p>*Billing Information</p>
							</div>
							<div class="col-md-5">
								<div class="cf-radio-btns address-rb">
									<div class="cfr-item">
										<input type="radio" name="pm" id="one">
										<label for="one">Use my regular address</label>
									</div>
									<div class="cfr-item">
										<input type="radio" name="pm" id="two">
										<label for="two">Use a different address</label>
									</div>
								</div>
							</div> -->
						</div>
						<div class="row address-inputs">
							<div class="col-md-12">
								<input type="text" name="nama" id="nama" placeholder="Nama">
								<input type="text" placeholder="Alamat" name="alamat" id="alamat">
								<input type="text" placeholder="No Telp" name="no_telp" id="no_telp">
							</div>
						</div>
					
						<button class="site-btn submit-order-btn" type="submit">Place Order</button>
						
					</form>
				</div>
				<div class="col-lg-4 order-1 order-lg-2">
					<div class="checkout-cart">
						<h3>Your Cart</h3>
						<ul class="product-list">
							<?php 
										foreach ($this->cart->contents() as $items) : ?>
							<li>
								<!-- <div class="pl-thumb"><img src="<?= base_url('assets/');?>img/cart/1.jpg" alt=""></div> -->
								<h6><?= $items['name'] ?></h6>
								<p>Rp.<?= number_format($items['price']) ?></p>
							</li>
							<!-- <li>
								<div class="pl-thumb"><img src="<?= base_url('assets/');?>img/cart/2.jpg" alt=""></div>
								<h6>Animal Print Dress</h6>
								<p>$45.90</p>
							</li> -->
						<?php endforeach ?>
						</ul>
						<ul class="price-list">
							<li>Total <span>Rp. <?= number_format($this->cart->total()) ?></span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- checkout section end -->
