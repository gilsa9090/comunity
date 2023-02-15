<h3 class="text-center">Gallery</h3>
<div class="container">
<a href="<?= base_url('gallery/insert'); ?>" class="btn btn-primary">tambah</a>
  <div class="row mt-4">
    <?php foreach($gallery as $g) :?>
    <div class="col-sm mt-4 mb-2">
        <div class="card" style="width: 18rem;">
            <img src="<?= base_url('assets/image') ?>/<?= $g['gambar']; ?>" height="350" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title text-center"><?= $g['judul']; ?></h5>
                <p class="card-text text-center"><?= $g['caption']; ?></p>
                <a href="<?= base_url('gallery/detail') ?>/<?= $g['id']; ?>" class="btn btn-primary mr-3">Details</a>
                <a href="<?= base_url('gallery/edit') ?>/<?= $g['id']; ?>"><span class="badge badge-warning">Edit</span></a>
                <a href="<?= base_url('gallery/delete') ?>/<?= $g['id']; ?>"><span class="badge badge-danger">Delete</span></a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
  </div>
</div>