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
                <form class="mt-4" action="<?= base_url('pelamar/insert') ?>" method="POST">
                    <h5 class="card-title">NIK</h5>
                    <div class="form-group">
                        <input type="text" class="form-control" name="nik" id="nik" required oninvalid="this.setCustomValidity('NIK tidak boleh kosong')" oninput="setCustomValidity('')">
                    </div>
                    <h5 class="card-title">Nama</h5>
                    <div class="form-group">
                        <input type="text" class="form-control" name="nama" id="nama" required oninvalid="this.setCustomValidity('Nama tidak boleh kosong')" oninput="setCustomValidity('')">
                    </div>
                    <h5 class="card-title">Periode</h5>
                    <div class="form-group">
                        <input type="text" class="form-control" name="periode" id="periode" required oninvalid="this.setCustomValidity('Periode tidak boleh kosong')" oninput="setCustomValidity('')">
                    </div>
                    <div class="float-right">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Simpan</button>
                    </div>
                </form>
            </div>
        </div>