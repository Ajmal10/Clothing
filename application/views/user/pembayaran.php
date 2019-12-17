<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>		
		<div class="col-md-8">
			<div class="btn btn-sm btn-success">
				<?php 
				$grand_total=0;
				if($keranjang = $this->cart->contents())
				{
					foreach ($keranjang as $items)
					{
						$grand_total = $grand_total + $items['subtotal'];
					}

					echo "Total belanja anda : Rp. ".number_format($grand_total);
				} ?>
			</div><br><br>
			<h3>Input alamat pengiriman dan pembayaran</h3>		

			<form method="post" action="<?php echo base_url() ?> user/proses_pesanan">

				<div class="form-group">
					<label>Nama lengkap</label>
					<input type="text" name="nama" placeholder="Nama lengkap Anda" class="form-control">
				</div>
				
				<div class="form-group">
					<label>Alamat lengkap</label>
					<input type="text" name="alamat" placeholder="Alamat lengkap Anda" class="form-control">
				</div>

				<div class="form-group">
					<label>No Telp</label>
					<input type="text" name="no_telp" placeholder="Nomor Telepon Anda" class="form-control">
				</div>

				<div class="form-group">
					<label>jasa Pengiriman</label>
					<select class="form-control">
						<option></option>
						<option>JNE</option>
						<option>TIKI</option>
						<option>Pos Indonesia</option>
						<option>GOJEK</option>
						<option>GRAB</option>
					</select>	
				</div>
				<div class="form-group">
					<label>Pilih BANK</label>
					<select class="form-control">
						<option></option>
						<option>BNI - XXXXXX</option>
						<option>BRI - XXXXXX</option>
						<option>BCA - XXXXXX</option>
					</select>
				</div>

				<button type="submit" class="btn btn-sm btn-primary mb-3">Pesan</button>			

			</form>
		</div>

		<div class="col-md-2"></div>
	</div>
</div>