<div class="container mt-3">
    <div class="row">
        <div class="col-lg-6">
            <?= Flasher::flash(); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search username" id="keyword" name="keyword">
                    <button class="btn btn-outline-secondary" type="submit" id="btnSeach">Cari</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#MhsFormModal">
                Tambah Data Mahasiswa
            </button>
            <br>
            <h3>Data Mahasiswa Local</h3>
            <?php foreach ($data['mhs'] as $mhs) : ?>
                <ul>
                    <li><?= $mhs['username']; ?></li>
                    <li><?= $mhs['email']; ?></li>
                    <li><?= $mhs['jurusan']; ?></li>
                </ul>
            <?php endforeach; ?>
            <br>
            <h3>Data Mahasiswa DB</h3>
            <?php foreach ($data['mhsdb'][0] as $mhs) : ?>
                <ul class="list-group">
                    <li class="list-group-item">
                        <?= $mhs['username']; ?>
                        <span>
                            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge bg-primary float-right ml-1">detail</a>
                        </span>
                        <span>
                            <a href="<?= BASEURL; ?>/mahasiswa/ubah" class="badge bg-warning float-right ml-1 tombolUbahData" data-id="<?= $mhs['id']; ?>" data-bs-toggle="modal" data-bs-target="#MhsFormModal">ubah</a>
                        </span>
                        <span>
                            <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge bg-danger float-right ml-1" onclick="return confirm('Yakin mau menghapus data <?= $mhs['email']; ?>');">delete</a>
                        </span>
                    </li>
                    <!-- <li><?= $mhs['email']; ?></li> -->
                    <!-- <li><?= $mhs['jurusan']; ?></li> -->
                </ul>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="MhsFormModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="judulformmodal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulmodal">Tambah Data Mahasiswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
                    <input type="hidden" id="id" name="id" />
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="username" id="username" class="form-control" placeholder="Roronoa Zoro" />
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="user@server.com" />
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select name="jurusan" id="jurusan" class="form-control">
                            <option value="informatika">Informatika</option>
                            <option value="akuntansi">Akuntansi</option>
                            <option value="sastra">Sastra</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>