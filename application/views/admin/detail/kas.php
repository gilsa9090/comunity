<h3 class="text-center">Laporan Kas</h3>
<div  style="width: 300px;">
<form action="<?= base_url('kas/laporan'); ?>" method="post">
            <label for="user_id">Pilih Bulan</label>
            <select class="form-control" name="bulan">
                        <option value="*">-- Pilih Bulan --</option>
                        <?php foreach($bulan as $n) :?>
                        <option value="<?= $n['id']; ?>"><?= $n['bulan']; ?></option>
                        <?php endforeach; ?>
            </select>
            <a href="<?= base_url('kas/laporan'); ?>"><button type="submit" class="btn btn-primary sm mt-4">Filter</button></a>
</form>
</div>
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