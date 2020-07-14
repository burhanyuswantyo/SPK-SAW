<div class="page-wrapper">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="row my-3">
                    <div class="col-6 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1"><?= $title ?></h4>
                    </div>
                    <div class="col-6 align-self-center">
                        <div class="customize-input float-right">
                            <div class="form-group form-inline">
                                <form action="<?= base_url('hasil') ?>">
                                    <input type="number" class="form-control mr-2" name="search" id="search" placeholder="Masukkan periode">
                                    <button class="btn btn-primary"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="bg-success text-white">
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">NIK</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">periode</th>
                                <th class="text-center">Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($hasil as $h) : ?>
                                <tr>
                                    <td class="text-center"><?= $i ?></td>
                                    <td><?= $h['nik'] ?></td>
                                    <td><?= $h['nama'] ?></td>
                                    <td class="text-center"><?= $h['periode'] ?></td>
                                    <td class="text-right"><?= number_format($h['hasil'], 2)  ?></td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>