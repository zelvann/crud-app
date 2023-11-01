<?php
require 'includes/header.php';
if(isset($_GET['nrp'])) {
  $data = byNRP($_GET['nrp']);
}
?>

<div class="container my-4">
  <div class="row">
    <div class="col col-4 mx-auto">
      <div class="card shadow">
        <div class="card-header">
          <h4 class="text-center">Update Form</h4>
        </div>
        <div class="card-body">
          <form action="process-update.php" method="post">
            <div class="form-group">
              <label for="">Nama</label>
              <input type="text" name="nama" class="form-control" value="<?= $data['nama'] ?>">
            </div>
            <input type="hidden" name="nrp" value="<?= $data['nrp'] ?>">
            <div class="form-group">
              <label for="">Departemen</label>
              <input type="text" name="departemen" class="form-control" value="<?= $data['departemen'] ?>">
            </div> 
            <div class="form-group">
              <label for="">Asal</label>
              <input type="text" name="asal" class="form-control" value="<?= $data['asal'] ?>">
            </div>
            <div class="form-group">
              <label for="">Tanggal</label>
              <input type="text" name="tanggal" class="form-control" value="<?= $data['mining_at'] ?>">
            </div>
        </div>
        <div class="card-footer">
          <div class="d-flex justify-content-around">
            <a href="index.php" class="btn btn-danger btn-sm">Batal</a>
            <button type="submit" name="update" class="btn btn-primary btn-sm">Update</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>