<h3 class="text-center">Halaman Kas</h3>
<div class="container cash">
  <div class="row">
    <div class="col-sm-8 colom py-3">
        <div class="card border-primary mb-3" style="max-width: 36rem;">
            <div class="card-body text-primary">
                <h5 class="card-title">Set Nominal</h5>
                <input class="form-control form-control-lg" type="text" value="<?= $kas->nominal; ?>" name="nominal">
                <button type="button" class="mt-3 btn btn-primary" data-toggle="modal" data-target="#insert">Set Nominal</button>
            </div>
        </div>
        <a href="<?= base_url('kas/laporan'); ?>"><button type="button"  class="my-3 btn btn-info">Detail Laporan</button></a>
    </div>
  </div>
  <div class="row">
    <div class="col colom">
        <div class="card border-info mb-3" style="max-width: 18rem;">
            <div class="card-body text-primary">
                <h5 class="card-title">Pembayaran Kas</h5>
                <p class="card-text">Silahkan lakukan pembayaran kas disini</p>
                <button type="button" class="mt-3 btn btn-primary" data-toggle="modal" data-target="#kas">Bayar Kas</button>
            </div>
        </div>
    </div>
  </div>
</div>

<div class="modal fade" id="insert" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Set Nominal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('kas/insert'); ?>" method="post">
            <input class="form-control form-control-lg" type="text" value="<?= $kas->nominal; ?>" name="nominal">
            <button type="submit" class="btn btn-primary mt-4">Set Nominal</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="kas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Set Nominal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('kas/bayar'); ?>" method="post">
            <label for="user_id">Nama</label>
            <select class="form-control" name="user_id">
                        <?php foreach($nama as $n) :?>
                        <option value="<?= $n['id']; ?>"><?= $n['nama']; ?></option>
                        <?php endforeach; ?>
            </select>
            <label for="bulan_id">Bulan</label>
            <select class="form-control" id="jurusan" name="bulan_id">
                        <?php foreach($bulan as $b) :?>
                        <option value="<?= $b['id']; ?>"><?= $b['bulan']; ?></option>
                        <?php endforeach; ?>
            </select>
            <label for="status">Nominal</label>
            <input class="form-control form-control-lg" type="text" value="<?= $kas->nominal; ?>" readonly  name="status">
            <button type="submit" class="btn btn-primary mt-4">Bayar Kas</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
