<div class="page-wrapper">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="row my-3">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1"><?= $title ?></h4>
                    </div>
                    <div class="col-5 align-self-center">
                        <div class="customize-input float-right">
                            <a href="<?= base_url('kriteria/tambah') ?>" class="btn btn-primary"><span><i class="fa fa-plus"></i> Tambah</span></a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="bg-warning text-white">
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Kriteria</th>
                                <th class="text-center">Bobot</th>
                                <th class="text-center">Sifat</th>
                                <th class="text-center" width="200vw">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($kriteria as $k) : ?>
                                <tr>
                                    <td class="text-center"><?= $i ?></td>
                                    <td><?= $k['kriteria'] ?></td>
                                    <td class="text-center"><?= $k['bobot'] ?></td>
                                    <?php if ($k['sifat'] == 1) { ?>
                                        <td class="text-center">Benefit</td>
                                    <?php } else { ?>
                                        <td class="text-center">Cost</td>
                                    <?php } ?>
                                    <td class="text-center">
                                        <a href="<?= base_url('kriteria/ubah/') . $k['id'] ?>" class="badge badge-success"><span><i class="fa fa-edit"></i> Ubah</span></a>
                                        <a href="<?= base_url('kriteria/delete/') . $k['id'] ?>" class="badge badge-danger"><span><i class="fa fa-trash"></i></span> Hapus</a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>