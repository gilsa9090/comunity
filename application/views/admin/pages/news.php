<div class="container mx-auto">
<a href="<?= base_url('news/insert') ?>">Tambah</a>
    <table class="table mt-4 mx-auto">
        <thead>
            <tr>
            <th scope="col">Thumbnail</th>
            <th scope="col">Berita</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($news as $d) : ?>
            <tr>
            <td><img src="<?= base_url('assets/image/') ?><?= $d['gambar']; ?>" alt=""></td>
            <td><?= $d['berita']; ?></td>
            <td>
                <a href="<?php base_url(); ?>divisiMember/detail/<?php echo $d['id'];?>"><span class="badge badge-info">Detail</span></a>
                <a href=""><span class="badge badge-warning">Edit</span></a>
                <a href=""><span class="badge badge-danger">Delete</span></a>
            </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

