<h3 class="text-center">Detail Divisi Member</h3>
<div class="container">
<div class="card ml-6 my-3">
  <div class="card-header">
    <?= $member->nama; ?>
  </div>
  <div class="card-body" >
    <h4 class="card-text"><?= $member->divisi_id; ?></h4>
    <p class="card-text mt-3"><?= $member->deskripsi; ?></p>
    <p class="card-text text-success"><?= $member->status; ?></p>
    <a href="<?= base_url('divisiMember'); ?>" class="btn btn-primary">Kembali</a>
  </div>
</div>
</div>