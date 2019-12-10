<section class="hero-section ">
<div class="card" style="width: 18rem;">
  <img src="<?= base_url('') ?>assets/img/product/<?= $barang['image'] ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?= $barang['nama'] ?></h5>
    <p class="card-text"><?= $barang['deskripsi'] ?></p>
    <p class="card-text"><?= $barang['harga'] ?></p>
    <p class="card-text"><?= $barang['stok_barang'] ?></p>
    <a href="<?= base_url(); ?>admin/ubah/<?= $barang['id'] ?>" class="btn btn-info">Ubah</a>
    <a href="<?= base_url(); ?>admin/hapus/<?= $barang['id'] ?>" class="btn btn-danger" onclick="return confirm('yakin?'); ">Delete</a>
  </div>
</div>
</section>