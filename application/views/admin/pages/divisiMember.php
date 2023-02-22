<div class="container mx-auto">
<a href="<?= base_url('divisiMember/insert'); ?>">Tambah</a>
    <table class="table mt-4 mx-auto">
        <thead>
            <tr>
            <th scope="col">Nama</th>
            <th scope="col">Divisi</th>
            <th scope="col">Status</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($member as $d) : ?>
            <tr>
            <td><?= $d['nama']; ?></td>
            <td><?= $d['divisi_id']; ?></td>
            <td><?= $d['status']; ?></td>
            <td><?= $d['deskripsi']; ?></td>
            <td>
                <a href="<?= base_url('divisiMember/detail') ?>/<?= $d['id_member']; ?>"><span class="badge badge-info">Detail</span></a>
                <a href="<?= base_url('divisiMember/edit') ?>/<?= $d['id_member']; ?>"><span class="badge badge-warning">Edit</span></a>
                <a href="<?= base_url('divisiMember/delete') ?>/<?= $d['id_member']; ?>"><span class="badge badge-danger">Delete</span></a>
            </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

