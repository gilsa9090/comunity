<div class="container mx-auto">
<a href="<?= base_url('divisi/insert'); ?>">tambah</a>
    <table class="table mt-4 mx-auto">
        <thead>
            <tr>
            <th scope="col">Nama</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($divisi as $d) : ?>
            <tr>
            <td><?= $d['nama_divisi']; ?></td>
            <td><?= $d['status']; ?></td>
            <td>
                <a href="<?= base_url('divisi/detail') ?>/<?= $d['id']; ?>"><span class="badge badge-info">Detail</span></a>
                <a href="<?= base_url('divisi/edit') ?>/<?= $d['id']; ?>"><span class="badge badge-warning">Edit</span></a>
                <a href="<?= base_url('divisi/delete') ?>/<?= $d['id']; ?>"><span class="badge badge-danger">Delete</span></a>
            </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

