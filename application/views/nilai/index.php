<div class="page-wrapper">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="row my-3">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1"><?= $title ?></h4>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">NIK</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center" width="200vw">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($pelamar as $p) : ?>
                                <tr>
                                    <td class="text-center"><?= $i ?></td>
                                    <td><?= $p['nik'] ?></td>
                                    <td><?= $p['nama'] ?></td>
                                    <td class="text-center">
                                        <a href="<?= base_url('nilai/ubah/') . $p['id'] ?>" class="badge badge-warning text-white"><span><i class="fa fa-edit"></i> Data Nilai</span></a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <div class="customize-input text-center">
                        <a href="<?= base_url('perhitungan') ?>" class="btn btn-success"><span><i class="fa fa-calculator"></i> Hitung</span></a>
                    </div>
                </div>
            </div>
        </div>