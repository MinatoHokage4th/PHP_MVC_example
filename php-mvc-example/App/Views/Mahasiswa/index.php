<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h3>Data Mahasiswa Local</h3>
            <?php foreach ($data['mhs'] as $mhs) : ?>
                <ul>
                    <li><?= $mhs['username'];?></li>
                    <li><?= $mhs['email'];?></li>
                    <li><?= $mhs['jurusan'];?></li>
                </ul>
            <?php endforeach;?>
            <br>
            <h3>Data Mahasiswa DB</h3>
            <?php foreach ($data['mhsdb'] as $mhs) : ?>
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <?= $mhs['username'];?>
                        <a href="<?= BASEURL;?>/mahasiswa/detail/<?= $mhs['id'];?>" class="badge bg-primary">detail</a>
                    </li>
                    <!-- <li><?= $mhs['email'];?></li> -->
                    <!-- <li><?= $mhs['jurusan'];?></li> -->
                </ul>
            <?php endforeach;?>
        </div>
    </div>
</div>