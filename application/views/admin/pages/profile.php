<h2>Profile Pages</h2>
<div class="card my-4" style="max-width: 700px; height: 220px">
  <div class="row no-gutters">
    <div class="col-md-4 gambar">
      <img src="<?php echo base_url('assets/image/').$user['image']; ?>" width="180" height="180">
    </div>
    <div class="col-md-8">
      <div class="card-body isi">
        <h5 class="card-title"><?php echo $user['nama'] ?></h5>
        <p class="card-text"></p>
        <p class="card-text"><small class="text-muted">Member Since <?php echo date('d, F, Y', $user['date_created']); ?></small></p>
      </div>
      <div class="editpro"><a href="">Edit Profile</a></div>
    </div>
  </div>
</div>