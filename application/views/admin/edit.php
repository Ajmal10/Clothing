<div class="container">

	<div class="row mt-3">
		<div class="col-md-6">

			<div class="card">
				<div class="card-header">
					Form Ubah Data Barang		
				</div>
				<div class="card-body">
					<form action="<?= base_url('') ?>admin/update" method="post" enctype="multipart/form-data">
						<input type="hidden" name="id" value="<?= $barang['id']; ?>">
						<input type="hidden" name="imageLama" id="imageLama" value="<?= $barang['image'] ?>">
						<div class="form-group">
							<label for="image">Gambar</label>
							<img src="<?= base_url('') ?>assets/img/product/<?= $barang['image'] ?>" width="200">
							<input type="file" name="image" class="form-control" id="image" value="<?= $barang['image']; ?>">
							<small class="form-text text-danger"><?= form_error('image'); ?></small>
						</div>
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" name="nama" class="form-control" id="nama" value="<?= $barang['nama']; ?>">
							<small class="form-text text-danger"><?= form_error('nama'); ?></small>
						</div>
						<div class="form-group">
							<label for="harga">Harga</label>
							<input type="text" name="harga" class="form-control" id="harga" value="<?= $barang['harga']; ?>">
							<small class="form-text text-danger"><?= form_error('harga'); ?></small>
						</div>
						<div class="form-group">
							<label for="deskripsi">Deskripsi</label>
							<input type="text" name="deskripsi" class="form-control" id="deskripsi" value="<?= $barang['deskripsi']; ?>">
							<small class="form-text text-danger"><?= form_error('deskripsi'); ?></small>
						</div>
						<div class="col-md-6">
								<!-- <input type="text" placeholder="Kategori" required id="kategori" name="kategori"> -->
								<select id="kategori" name="kategori">
									<option value="0">Kategori</option>

									<option value="1" <?php if($barang['kategori']==1) echo 'selected="true"'; ?>>Atasan</option>
									<option value="2" <?php if($barang['kategori']==2) echo 'selected="true"'; ?>>Bawahan</option>
								</select>
								</div>
							</div>
						<div class="form-group">
							<label for="stok_barang">Stok barang</label>
							<input type="text" name="stok_barang" class="form-control" id="stok_barang" value="<?= $barang['stok_barang']; ?>">
							<small class="form-text text-danger"><?= form_error('stok_barang'); ?></small>
						</div>
						<div class="form-group">
							<label for="terjual">Terjual</label>
							<input type="text" name="terjual" class="form-control" id="terjual" value="<?= $barang['terjual']; ?>">
							<small class="form-text text-danger"><?= form_error('terjual'); ?></small>
						</div>
						
						<button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
					</form>
				</div>
			</div>
		</div>
	</div>



</div>