<div class="container">

    <div class="row mt-3 mx-auto">
        <div class="col-md-6 mt-3 mx-auto">
            <div class="card">
                <div class="card-header">
                    Edit Gallery
                </div>
                <div class="card-body">
                <?php echo form_open_multipart('gallery/edit');?>
                    <div class="form-group">
                        <input type="hidden" value="<?= $gallery->id; ?>">
                        <label for="berita">Judul</label>
                        <input type="text" class="form-control" value="<?= $gallery -> judul; ?>" name="judul">
                    </div>
                    <div class="form-group">
                        <label for="gambar">gambar</label>
                        <input type="file" class="form-control" value="<?= $gallery -> gambar; ?>" name="gambar">
                    </div>
                    <div class="form-group">
                        <label for="isi">Caption</label>
                        <textarea name="caption" id="" class="form-control"><?= $gallery -> caption; ?></textarea>
                    </div>
                    <input type="submit" value="insert" name="submit" class="btn btn-primary float-right" id="">
                </form>
                </div>
            </div>
        </div>
    </div>

</div>