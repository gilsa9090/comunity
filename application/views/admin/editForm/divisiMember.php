<div class="container">

    <div class="row mt-3 mx-auto">
        <div class="col-md-6 mt-3 mx-auto">

            <div class="card">
                <div class="card-header">
                    Tambahkan Divisi Member
                </div>
                <div class="card-body">
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $desc->id_member; ?>" id="">
                    <div class="form-group">    
                        <label for="nama">Nama</label>
                        <select class="form-control" id="jurusan" name="nama">
                        <?php foreach($nama as $n) :?>
                                <option value="<?= $n['id']; ?>"><?= $n['nama']; ?></option>
                        <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama">Divisi</label>
                        <select class="form-control" id="jurusan" name="divisi">
                        <?php foreach($divisi as $d) :?>
                        <option value="<?= $d['nama_divisi']; ?>"><?= $d['nama_divisi']; ?></option>
                        <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama">Status</label>
                        <select class="form-control" id="jurusan" name="status">
                        <option value="aktif">Aktif</option>
                        <option value="nonaktif">Nonaktif</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control"><?= $desc->deskripsi; ?></textarea>
                    </div>
                    <input type="submit" value="Edit" name="insert" class="btn btn-primary float-right" id="">
                </form>
                </div>
            </div>
        </div>
    </div>

</div>