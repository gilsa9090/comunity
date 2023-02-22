<div class="card mb-3 kta mx-auto mt-5" style="max-width: 640px;">
  <div class="row no-gutters">
    <div class="col-md-4 images">
      <img src="<?= base_url('assets/image/').$nama->image; ?>" width="160" height="160" alt="">
    </div>
    <div class="col-md-8 ktacard" id="kta">
      <div class="card-body isi">
        <h5 class="nama"><?= $user['nama']; ?></h5>
        <p class="card-text"><?= $nama -> divisi_id; ?></p>
        <p class="card-text"><small><?= $nama -> deskripsi; ?></small></p>
        <p class="card-text"><small>Member Since <?php echo date('d, F, Y', $user['date_created']); ?></small></p>
      </div>

      <div class="lo">
        <h3>.Arsmagia</h3>
      </div>


    </div>
    <div class="export mx-auto">
        <a href="<?= base_url('card/pdf'); ?>/<?= $nama -> user_id; ?>" ><button class="pdf">Export</button></a>
    </div>
  </div>
</div>