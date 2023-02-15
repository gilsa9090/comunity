<div class="container">

    <div class="row mt-3 mx-auto">
        <div class="col-md-6 mt-3 mx-auto">
            <div class="card">
                <div class="card-header">
                    Edit News
                </div>
                <div class="card-body">
                <?php echo form_open_multipart('news/edit/' . $news->id); ?>
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?= $news->id; ?>">
                        <label for="berita">Berita</label>
                        <input type="text" class="form-control" value="<?= $news -> berita; ?>" name="berita">
                    </div>
                    <div class="form-group">
                        <label for="gambar">gambar</label>
                        <input type="file" class="form-control" name="gambar">
                    </div>
                    <div class="form-group">
                        <label for="isi">Isi</label>
                        <textarea name="isi" id="" class="form-control"><?= $news -> isi; ?></textarea>
                    </div>
                    <input type="submit" value="insert" name="submit" class="btn btn-primary float-right" id="">
                <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>

</div>