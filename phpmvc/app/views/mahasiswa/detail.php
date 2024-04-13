<div class="container mt-5">

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= isset($data['mhs']['nama']) ? $data['mhs']['nama'] : '' ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= isset($data['mhs']['nrp']) ? $data['mhs']['nrp'] : '' ?></h6>
            <p class="card-text"><?= isset($data['mhs']['email']) ? $data['mhs']['email'] : '' ?></p>
            <p class="card-text"><?= isset($data['mhs']['jurusan']) ? $data['mhs']['jurusan'] : '' ?></p>
            <a href="<?= BASEURL; ?>/mahasiswa" class="card-link">Kembali</a>
        </div>
    </div>

</div>
