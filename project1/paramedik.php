<?php
include_once('top.php');
include_once('menu.php');
include_once('koneksi.php');

$query = "SELECT * FROM paramedik";
$paramediks = $dbh->query($query);
?>
<div class="container-fluid px-4">
    <div class="d-flex mt-4">
        <h3>Dokter</h3>
        <a href="paramedik_create.php" class="btn btn-primary ms-auto">+ Paramedik</a>
    </div>
    <table class="table mt-4">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>JK</th>
            <th>Alamat</th>
        </tr>

        <?php
        $no = 0;
        foreach ($paramediks as $paramediks) : ?>
            <tr>
                <td><?= $no += 1; ?></td>
                <td><?= $paramediks['nama'] ?></td>
                <td><?= $paramediks['tmp_lahir'] ?></td>
                <td><?= $paramediks['tgl_lahir'] ?></td>
                <td><?= $paramediks['gender'] ?></td>
                <td><?= $paramediks['alamat'] ?></td>
                <td>
                    <a href="paramedik_edit.php?id=<?= $paramediks['id'] ?>" class="btn btn-primary">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a href="paramedik_delete.php?id=<?= $paramediks['id'] ?>" class="btn btn-danger">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</div>

<?php
include_once('bottom.php');
?>