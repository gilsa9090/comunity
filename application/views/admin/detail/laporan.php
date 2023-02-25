<h3 class="text-center">Laporan Kas</h3>
<table class="table table-striped mt-4">
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Bulan</th>
      <th scope="col">Nominal</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($nama as $n) : ?>
    <tr>
      <th scope="row"><?= $n['nama']; ?></th>
      <td><?= $n['bulan']; ?></td>
      <td><?= $n['status']; ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<a href="<?= base_url('admin/kas'); ?>"><button class="btn btn-danger mt-4">Kembali</button></a>