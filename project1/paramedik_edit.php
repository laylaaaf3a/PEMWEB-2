<?php
include_once('koneksi.php');
$kelurahan = $dbh->query('SELECT * FROM kelurahan');

$id = $_GET['id'];
$paramedik = $dbh->query("SELECT * FROM paramedik WHERE id =$id")->fetch();

include_once('top.php');
include_once('menu.php');
?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Edit paramedik</h1>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <form action="paramedik_update.php" method="post">
        <input type="hidden" name="id", value="<?= $paramedik['id'] ?>">
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama</label>
            <div class="col-8">
                <input id="nama" name="nama" type="text" class="form-control" required="required" value="<?= $paramedik['nama'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label>
            <div class="col-8">
                <input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control" required="required" value="<?= $paramedik['tmp_lahir'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label>
            <div class="col-8">
                <input id="tgl_lahir" name="tgl_lahir" type="date" class="form-control" required="required" value="<?= $paramedik['tgl_lahir'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Jenis Kelamin</label>
            <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="L" required="required" <?= $paramedik['gender'] == 'L' ? 'checked' : '' ?>>
                    <label for="gender_0" class="custom-control-label">Laki-laki</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="P" required="required" <?= $paramedik['gender'] == 'P' ? 'checked' : '' ?>>
                    <label for="gender_1" class="custom-control-label">Perempuan</label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="kelurahan_id" class="col-4 col-form-label">Kelurahan</label>
            <div class="col-8">
                <select id="kelurahan_id" name="kelurahan_id" class="custom-select" required="required" >
                    <option value="">-- Pilih Kelurahan --</option>
                    <?php foreach ($kelurahan as $kel) : ?>
                        <option <?= $paramedik['kelurahan_id'] == $kel['id'] ? 'selected' : '' ?> value="<?= $kel['id'] ?>"><?= $kel['nama'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat" class="col-4 col-form-label">Alamat</label>
            <div class="col-8">
                <textarea id="alamat" name="alamat" cols="40" rows="3" class="form-control" required="required"><?= $paramedik['alamat'] ?></textarea>
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>

<?php
include_once('bottom.php');
?>