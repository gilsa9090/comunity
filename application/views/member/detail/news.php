<h3 class="text-center">Detail Kegitan</h3>
<div class="container">
<div class="card">
  <div class="card-header">
    <?= $news->berita; ?>
  </div>
  <div class="card-body">
    <img src="<?= base_url('assets/image') ?>/<?= $news->gambar ?>" style="border-radius: 20px;" class="my-3" width="450" height="400" alt="">
    <p class="card-text"><?= $news->isi; ?></p>
    <a href="<?= base_url('member/news'); ?>" class="btn btn-primary">Kembali</a>
  </div>
</div>
</div>