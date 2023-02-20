<div class="container">
    <div class="row dashboard">
        <div class="col-sm-5 c1">Hallo Selamat Datang <?= $user['nama']; ?>.</div>
    </div>
    <div class="row dashboard">
        <div class="col-sm-7 c">
            <h6>Total Kas Terkini</h6>
            <p>Rp.<?= $balance ?></p>
            <div class="">
                <a href="<?= base_url('admin/kas'); ?>"><button name="kas" class="kas">Bayar Kas</button></a>
            </div>
        </div>
        <div class="col-sm-4 c">
            <h6>Status Keanggotaan</h6>
            <div class="spare">
                <h4>Aktif</h4>
            </div>
        </div>
    </div>
</div>

<div class="container">
<div class="row">
        <div class="col-sm-4 c2 mt-12">
            <table class="table">
                <h5 class="my-4">Daftar Anggota</h5>
                <thead>
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Divisi</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($nama as $n) : ?>
                    <tr>
                        <td><?= $n['nama']; ?></td>
                        <td><?= $n['nama_divisi']; ?></td>
                        <td><?= $n['status']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="detail mr-2 my-4">
                 <a href="<?= base_url('admin') ?>/anggota"><button>Details</button></a>    
            </div>
        </div>
        <div class="col-sm-7 c2 mt-12">
        <table class="table">
                <h5 class="my-4">Berita Terkini</h5>
                <tbody>
                    <?php foreach($news as $n) : ?>
                    <tr>
                        <th scope="row"><img class="images" src="<?= base_url('assets') ?>/image/<?= $n['gambar']; ?>" alt=""></th>
                        <td><?= $n['berita']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="detail mr-2 my-4">
                 <a href="<?= base_url('admin') ?>/news"><button>Details</button></a>    
            </div>
        </div>
    </div> 
</div>
