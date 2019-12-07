<div class="card" style="width: 18rem;">
  <img src="<?= base_url('') ?>assets/img/product/<?= $barang['image'] ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?= $barang['nama'] ?></h5>
    <p class="card-text"><?= $barang['deskripsi'] ?></p>
    <a href="<?= base_url(); ?>admin/ubah" class="btn btn-info">Ubah</a>
  </div>
</div>