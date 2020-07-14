<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1"><?= $title ?></h4>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?= $pelamar['nik']; ?> - <?= $pelamar['nama']; ?></h5>
                <hr>
                <form class="mt-4" action="<?= base_url('nilai/update/') ?>" method="POST">
                    <?php foreach ($nilai as $n) : ?>
                        <h6 class="card-title"><?= $n['kriteria']; ?></h6>
                        <div class="form-group">
                            <input type="hidden" name="id[]" id="id" value="<?= $n['id'] ?>">
                            <input type="text" class="form-control" name="nilai[]" id="nilai" value="<?= $n['nilai']; ?>" required oninvalid="this.setCustomValidity('Kriteria tidak boleh kosong')" oninput="setCustomValidity('')">
                        </div>
                    <?php endforeach ?>
                    <div class="float-right">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Simpan</button>
                    </div>
                </form>
            </div>
        </div>