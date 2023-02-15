<div class="container">

    <div class="row mt-3 mx-auto">
        <div class="col-md-6 mt-3 mx-auto">

            <div class="card">
                <div class="card-header">
                    Tambahkan Gallery
                </div>
                <div class="card-body">
                <?php echo form_open_multipart('gallery/insert');?>
                    <div class="form-group">
                        <label for="berita">Judul</label>
                        <input type="text" class="form-control" name="judul">
                    </div>
                    <div class="form-group">
                        <label for="gambar">gambar</label>
                        <input type="file" class="form-control" name="gambar">
                    </div>
                    <div class="form-group">
                        <label for="isi">Caption</label>
                        <textarea name="caption" id="" class="form-control"></textarea>
                    </div>
                    <input type="submit" value="insert" name="submit" class="btn btn-primary float-right" id="">
                </form>
                </div>
            </div>
        </div>
    </div>

</div>