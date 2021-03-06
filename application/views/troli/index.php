<!-- Page info -->
<div class="page-top-info">
	<div class="container">
		<h4>Your cart</h4> <br></br>
		<?php if($this->session->flashdata('message')): ?>
		<?= $this->session->flashdata('message');?>
		<?php endif ;?>
	</div>
</div>
<!-- Page info end -->

	<!-- cart section end -->
	<section class="cart-section spad" style="margin-top: -90px;">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="cart-table">
						<h3>Your Cart</h3>
						<div class="cart-table-warp">
							<table>
							<thead>
								<tr>
									<th class="product-th">Nama Produk</th>
									<th class="size-th">Jumlah</th>
									<th class="total-th">Harga</th>
									<th class="total-th">Opsi</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($this->cart->contents() as $items) : ?>
									<input type="hidden" name="cart[<?php echo $items['id'];?>][id]" value="<?php echo $items['id'];?>" />
									<input type="hidden" name="cart[<?php echo $items['id'];?>][rowid]" value="<?php echo $items['rowid'];?>" />
								<tr>
									<td class="product-col">
									<img src="<?= base_url('');?>assets/img/product/<?= $items['image'] ?>" alt="">
										<div class="pc-title">
											<h4><?= $items['name'] ?></h4></p>
										</div>
									</td>
									<td class="size-col"><h4><?= $items['qty'] ?></h4></td>
									<td class="total-col"><h4>Rp. <?= number_format($items['price'], 0,',','.') ?></h4></td>
									<td class="total-col"><a href="<?= base_url('user/hapus_keranjang/')?><?= $items['rowid']?>"><button class="btn btn-danger">Delete</button></a></td>
									<!-- <td class="total-th">Delete</td> -->
								<?php endforeach ?>
								</tr>	
							</tbody>
						</table>
						</div>
						<div class="total-cost">
							<h6>Total <span>Rp. <?= number_format($this->cart->total()) ?></span></h6>
						</div>
					</div>
				</div>
				<div class="col-lg-4 card-right">
					<!-- <form class="promo-code-form">
						<input type="text" placeholder="Enter promo code">
						<button>Submit</button>
					</form> -->
					<a href="<?= base_url('');?>user/pembayaran" class="site-btn">Proceed to checkout</a>
					<a href="<?= base_url('');?>home/index2" class="site-btn sb-dark">Continue shopping</a>
				</div>
			</div>
		</div>
	</section>
	<!-- cart section end -->

	<!-- Related product section -->
	<!-- <section class="related-product-section">
		<div class="container">
			<div class="section-title text-uppercase">
				<h2>Continue Shopping</h2>
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<div class="tag-new">New</div>
							<img src="<?= base_url('assets/');?>img/product/2.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Black and White Stripes Dress</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="<?= base_url('assets/');?>img/product/5.jpg" alt="">
							<div class="pi-links">
								<a href="<?= base_url('');?>troli" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Flamboyant Pink Top </p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="<?= base_url('assets/');?>img/product/9.jpg" alt="">
							<div class="pi-links">
								<a href="<?= base_url('');?>troli" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Flamboyant Pink Top </p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="<?= base_url('assets/');?>img/product/1.jpg" alt="">
							<div class="pi-links">
								<a href="<?= base_url('');?>troli" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Flamboyant Pink Top </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- Related product section end -->
