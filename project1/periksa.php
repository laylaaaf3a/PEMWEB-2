<?php
include_once('top.php');
include_once('menu.php');
include_once('koneksi.php');

$query = "SELECT * FROM periksa";
$periksas = $dbh->query($query);
?>
<div class="container-fluid px-4">
    <div class="d-flex mt-4">
        <h3>Check Up Pasien</h3>
        <a href="periksa_create.php" class="btn btn-primary ms-auto">+ Keluhan</a>
    </div>
    <table class="table mt-4">
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Berat Badan</th>
            <th>Tinggi Badan</th>
            <th>Tinggi Tensi</th>
            <th>Keterangan</th>
        </tr>

        <?php
        $no = 0;
        foreach ($periksas as $periksas) : ?>
            <tr>
                <td><?= $no += 1; ?></td>
                <td><?= $periksas['tanggal'] ?></td>
                <td><?= $periksas['berat'] ?></td>
                <td><?= $periksas['tinggi'] ?></td>
                <td><?= $periksas['tensi'] ?></td>
                <td><?= $periksas['keterangan'] ?></td>
                <td>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</div>

<?php
include_once('bottom.php');
?>