

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
					<div class="row">
					<section class="checkout-section spad">
						<div class="container">
							<div class="row">
								<div class="col-lg-10 order-2 order-lg-1">
									<form class="checkout-form" method="post" action="<?=site_url('admin/insert') ?>" enctype="multipart/form-data" >
										<div class="cf-title">Form Tambah Produk</div>
										<div class="row address-inputs">
											<div class="col-md-12">
												<input type="text" placeholder="Nama Barang" required id="nama" name="nama">
												<input type="text" placeholder="Harga" required id="harga" name="harga">
											</div>
											<div class="col-md-12">
												<input type="text" placeholder="Deskripsi" required id="deskripsi" name="deskripsi">
											</div>
											
											<div class="col-md-12 mb-2">
												<input type="text" placeholder="Stok Barang" required id="stok_barang" name="stok_barang">
											</div>
														<div class="col-md-12 mb-2">
															<!-- <input type="text" placeholder="Kategori" required id="kategori" name="kategori"> -->
															<select id="kategori" name="kategori">
																<option>Kategori</option>
																<option value="1"  >Atasan</option>
																<option value="2"  >Bawahan</option>
															</select>
														</div>
											<div class="col-md-12">
												<div class="cf-title">
												<input type="file" placeholder="image" required id="image" name="image" ></div>
											</div>
										<button class="site-btn submit-order-btn" type="Submit">Tambah Produk</button>
										</div>
									</form>
								</div>
								</div>
							</div>
						</div>
	</section>
					