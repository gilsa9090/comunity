<div class="container mx-auto">
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
                <a href="<?php base_url(); ?>divisiMember/detail/<?php echo $d['id'];?>"><span class="badge badge-info">Detail</span></a>
            </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

