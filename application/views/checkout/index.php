<!-- Page info -->
<div class="page-top-info">
	<div class="container">
		<h4>Your checkout</h4> <br></br>
		<?php if($this->session->flashdata('message')): ?>
		<?= $this->session->flashdata('message');?>
		<?php endif ;?>
	</div>
</div>
<!-- Page info end -->


<!-- checkout section  -->
<section class="checkout-section spad" style="margin-top: -90px;">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 order-2 order-lg-1">
				<form class="checkout-form" action="<?= base_url('user/proses_pesanan') ?>" enctype="multipart/form-data" method="post">
					<div class="cf-title">Billing Address</div>
					<div class="row address-inputs">
						<div class="col-md-12">
							<input type="text" name="nama_customer" id="nama_customer" placeholder="Nama" required>
							<input type="text" placeholder="Alamat" name="alamat" id="alamat" required>
							<input type="text" placeholder="No Telp" name="no_telp" id="no_telp" required|numeric>
						</div>
					</div>
					<button class="site-btn submit-order-btn" type="submit">Place Order</button>
				</form>
			</div>
			<div class="col-lg-4 order-1 order-lg-2">
				<div class="checkout-cart">
					<h3>Your Cart</h3>
					<ul class="product-list">
						<?php foreach ($this->cart->contents() as $items) : ?>
							<li>
								<div class="pl-thumb"><img src="<?= base_url('');?>assets/img/product/<?= $items['image'] ?>" alt=""></div>
								<h6><?= $items['name'] ?></h6>
								<p>Rp.<?= number_format($items['price']) ?></p>
							</li>
						<?php endforeach ?>
					</ul>
					<ul class="price-list">
							<li class="total">Total </li>
							<span>Rp. <?= number_format($this->cart->total()) ?></span>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- checkout section end -->
