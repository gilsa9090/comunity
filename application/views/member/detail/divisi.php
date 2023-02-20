<h3 class="text-center">Detail Divisi</h3>
<div class="container">
<div class="card ml-6 my-3">
  <div class="card-header">
    <?= $divisi->nama_divisi; ?>
  </div>
  <div class="card-body" >
    <p class="card-text"><?= $divisi->status; ?></p>
    <a href="<?= base_url('divisi'); ?>" class="btn btn-primary">Kembali</a>
  </div>
</div>
</div>