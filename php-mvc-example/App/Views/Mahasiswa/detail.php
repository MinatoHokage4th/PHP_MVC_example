<div class="container">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['mhsdb']['username']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data['mhsdb']['email']; ?></h6>
            <p class="card-text"><?= $data['mhsdb']['jurusan']; ?></p>
            <a href="<?= BASEURL; ?>/mahasiswa" class="card-link">BACK</a>
        </div>
    </div>
</div>