<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Tabel Alternatif</h3>
                    <table class="table table-bordered">
                        <tr>
                            <th width="80vw"></th>
                            <?php for ($i = 1; $i <= $count['criteria']; $i++) : ?>
                                <th>C<?= $i ?></th>
                            <?php endfor ?>
                        </tr>
                        <?php $i = 1 ?>
                        <?php foreach ($results['value'] as $result) : ?>
                            <tr>
                                <th>K<?= $i ?></th>
                                <?php for ($j = 0; $j < $count['criteria']; $j++) : ?>
                                    <td><?= $result[$j]['nilai'] ?></td>
                                <?php endfor ?>
                            </tr>
                            <?php $i++ ?>
                        <?php endforeach ?>
                    </table>

                    <h3 class="card-title">Tabel Max Min</h3>
                    <table class="table table-bordered">
                        <tr>
                            <th width="80vw"></th>
                            <?php $i = 1 ?>
                            <?php foreach ($results['criteria'] as $result) : ?>
                                <td>C<?= $i ?></td>
                                <?php $i++ ?>
                            <?php endforeach ?>
                        </tr>
                        <tr>
                            <th>Sifat</th>
                            <?php foreach ($results['criteria'] as $result) : ?>
                                <?php if ($result['sifat'] == 1) : ?>
                                    <td>Benefit</td>
                                <?php else : ?>
                                    <td>Cost</td>
                                <?php endif ?>
                            <?php endforeach ?>
                        </tr>
                        <tr>
                            <th>Max/Min</th>
                            <?php foreach ($results['criteria'] as $result) : ?>
                                <td><?= $result['weight'] ?></td>
                            <?php endforeach ?>
                        </tr>
                    </table>

                    <h3 class="card-title">Tabel Ternormalisasi</h3>
                    <table class="table table-bordered">
                        <tr>
                            <th width="80vw"></th>
                            <?php for ($i = 1; $i <= $count['criteria']; $i++) : ?>
                                <th>C<?= $i ?></th>
                            <?php endfor ?>
                        </tr>
                        <?php for ($j = 0; $j < $count['applicant']; $j++) : ?>
                            <tr>
                                <th>K <?= $j + 1 ?></th>
                                <?php foreach ($results['norm'] as $result) : ?>
                                    <td><?= number_format($result[$j]['norm'], 2) ?></td>
                                <?php endforeach ?>
                            </tr>
                        <?php endfor ?>
                    </table>

                    <h3 class="card-title">Tabel Bobot</h3>
                    <table class="table table-bordered">
                        <tr>
                            <th width="80vw"></th>
                            <?php for ($i = 1; $i <= $count['criteria']; $i++) : ?>
                                <th>C<?= $i ?></th>
                            <?php endfor ?>
                        </tr>
                        <tr>
                            <th>Bobot</th>
                            <?php foreach ($weights as $weight) : ?>
                                <td><?= $weight['bobot'] ?></td>
                            <?php endforeach ?>
                        </tr>
                    </table>

                    <h3 class="card-title">Tabel Ternormalisasi Terbobot</h3>
                    <div class="row">
                        <div class="col-sm-11">
                            <table class="table table-bordered">
                                <tr>
                                    <th width="80vw"></th>
                                    <?php for ($i = 1; $i <= $count['criteria']; $i++) : ?>
                                        <th>C<?= $i ?></th>
                                    <?php endfor ?>
                                </tr>
                                <?php for ($j = 0; $j < $count['applicant']; $j++) : ?>
                                    <tr>
                                        <th>K <?= $j + 1 ?></th>
                                        <?php foreach ($results['norm_weight'] as $result) : ?>
                                            <td><?= number_format($result[$j]['norm'], 2) ?></td>
                                        <?php endforeach ?>
                                    </tr>
                                <?php endfor ?>
                            </table>
                        </div>
                        <div class="col-sm-1">
                            <table class="table table-bordered">
                                <tr>
                                    <th>V</th>
                                </tr>
                                <tr>

                                    <?php foreach ($results['total'] as $total) : ?>
                                        <th><?= number_format($total['V'], 2) ?></th>
                                </tr>
                            <?php endforeach ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>