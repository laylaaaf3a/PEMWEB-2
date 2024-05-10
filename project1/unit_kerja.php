<?php
include_once('top.php');
include_once('menu.php');
include_once('koneksi.php');

$query = "SELECT * FROM unit_kerja";
$unit_kerja = $dbh->query($query);
?>
<div class="container-fluid px-4">
    <div class="d-flex mt-4">
        <h3>Unit Kerja</h3>
    </div>
    <table class="table mt-4">
        <tr>
            <th>No</th>
            <th>Unit Kerja</th>
        </tr>

        <?php
        $no = 0;
        foreach ($unit_kerja as $unit_kerja) : ?>
            <tr>
                <td><?= $no += 1; ?></td>
                <td><?= $unit_kerja['nama'] ?></td>
            </tr>
        <?php endforeach ?>
    </table>
</div>

<?php
include_once('bottom.php');
?>