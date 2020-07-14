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
                            <a href="<?= base_url('pelamar/tambah') ?>" class="btn btn-primary"><span><i class="fa fa-plus"></i> Tambah</span></a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="bg-danger text-white">
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">NIK</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">Periode</th>
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
                                    <td class="text-center"><?= $p['periode'] ?></td>
                                    <td class="text-center">
                                        <a href="<?= base_url('pelamar/ubah/') . $p['id'] ?>" class="badge badge-success"><span><i class="fa fa-edit"></i> Ubah</span></a>
                                        <a href="<?= base_url('pelamar/delete/') . $p['id'] ?>" class="badge badge-danger"><span><i class="fa fa-trash"></i></span> Hapus</a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>