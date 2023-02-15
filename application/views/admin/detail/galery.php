<h3 class="text-center">Detail Gambar</h3>
<div class="container">
<div class="card ml-6 my-3" style="width: 35rem;">
  <div class="card-header">
    <?= $gallery->judul; ?>
  </div>
  <div class="card-body" >
    <img class="text-center" src="<?= base_url('assets/image') ?>/<?= $gallery->gambar ?>" style="border-radius: 20px;" class="my-3" width="450rem" alt="">
    <p class="card-text"><?= $gallery->caption; ?></p>
    <a href="<?= base_url('admin/gallery'); ?>" class="btn btn-primary">Kembali</a>
  </div>
</div>
</div>