<div class="container mx-auto">
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
            <td><img src="<?= base_url('assets/image/') ?><?= $d['gambar']; ?>" width="200" height="170" alt=""></td>
            <td><?= $d['berita']; ?></td>
            <td>
                <a href="<?= base_url('member/Newsdetail'); ?>/<?php echo $d['id'];?>"><span class="badge badge-info">Detail</span></a>
            </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

