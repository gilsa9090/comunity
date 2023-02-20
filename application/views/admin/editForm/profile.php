<h3 class="text-center mb-4             ">Edit Profile</h3>
<div class="container mt-6" style="max-width: 700px">
<form action="<?= base_url('profile/edit'); ?>" method="post" enctype="multipart/form-data">
        <div class="form-group row">
            <label for="username" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="username" readonly value="<?= $user['username']; ?>" id="inputEmail3">
            </div>
        </div>
        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Full Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" value="<?= $user['nama']; ?>" name="nama">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2">Picture</div>
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-sm-3">
                        <img src="<?= base_url('assets/image/').$user['image']; ?>" class="img-thumbnail" alt="">
                    </div>
                    <div class="col-sm-9">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image">
                            <label for="image" class="custom-file-label">Pilih Gambar</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group row justify-content-end">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Edit</button>
                <a href="<?= base_url('profile'); ?>"><button type="button" class="btn btn-primary">Kembali</button></a>
            </div>
        </div>
</form>
</div>