<div class="container">

    <div class="row mt-3 mx-auto">
        <div class="col-md-6 mt-3 mx-auto">
            <div class="card">
                <div class="card-header">
                    Tambahkan Divisi
                </div>
                <div class="card-body">
                <?php echo validation_errors(); ?>
                <form action="" method="post">
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?= $divisi->id; ?>">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" value="<?= $divisi->nama_divisi; ?>" name="nama" id="nama">
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control" id="jurusan" name="status">
                        <option value="aktif">Aktif</option>
                        <option value="nonaktif">Nonaktif</option>
                        </select>
                    </div>
                    <input type="submit" value="Edit" name="insert" class="btn btn-primary float-right" id="">
                </form>
                </div>
            </div>
        </div>
    </div>

</div>