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
                <form class="mt-4" action="<?= base_url('kriteria/update/') . $kriteria['id'] ?>" method="POST">
                    <h5 class="card-title">Kriteria</h5>
                    <div class="form-group">
                        <input type="text" class="form-control" name="kriteria" id="kriteria" value="<?= $kriteria['kriteria']; ?>" required oninvalid="this.setCustomValidity('Kriteria tidak boleh kosong')" oninput="setCustomValidity('')">
                    </div>
                    <h5 class="card-title">Bobot</h5>
                    <div class="form-group">
                        <input type="text" class="form-control" name="bobot" id="bobot" value="<?= $kriteria['bobot']; ?>" required oninvalid="this.setCustomValidity('Bobot tidak boleh kosong')" oninput="setCustomValidity('')">
                    </div>
                    <h5 class="card-title">Sifat</h5>
                    <div class="form-group">
                        <select class="form-control" name="sifat" id="sifat">
                            <option value="1">Benefit</option>
                            <option value="2">Cost</option>
                        </select>
                    </div>
                    <div class="float-right">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Simpan</button>
                    </div>
                </form>
            </div>
        </div>