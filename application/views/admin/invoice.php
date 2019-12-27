


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
							<li><a href="<?= base_url()?>admin/kelola">Inovice Penjualan</a></li>

						</ul>
					</div>
				</div>

					<div class="col-lg-9  order-1 order-lg-2 mb-5 mb-lg-0">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">Kode Invoice</th>
                            <th scope="col">Nama Customer</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">No Telp</th>
                            <th scope="col">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php $i=1?>
                                <?php foreach($detail_pesanan as $dp): ?>
                            <th scope="row">ord-00<?= $i++?></th>
                            <td><?= $dp['nama_customer']?></td>
                            <td><?= $dp['alamat']?></td>
                            <td><?= $dp['no_hp']?></td>
                            <td><a href="<?= base_url('')?>admin/invoiceDetail/<?= $dp['id']?>" class="btn btn-info" >Detail</a></td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                        </table>		
							</div>
					</div>
				</div>
			</div>
	</section>
	<!-- Category section end -->

