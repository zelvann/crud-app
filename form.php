<?php
require 'includes/header.php';
?>

<div class="container my-4">
  <div class="row">
    <div class="col col-4 mx-auto">
      <div class="card shadow">
        <div class="card-header">
          <h4 class="text-center">Form Pendaftaran</h4>
        </div>
        <div class="card-body">
          <form action="process-form.php" method="post">
            <div class="form-group">
              <label for="">Nama</label>
              <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap...">
            </div>
            <div class="form-group">
              <label for="">NRP</label>
              <input type="text" name="nrp" class="form-control" placeholder="Masukkan NRP...">
            </div>
            <div class="form-group">
              <label for="">Departemen</label>
              <input type="text" name="departemen" class="form-control" placeholder="Masukkan Asal departemen...">
            </div>
            <div class="form-group">
              <label for="">Asal</label>
              <input type="text" name="asal" class="form-control" placeholder="Masukkan Asal daerah...">
            </div>
            <div class="form-group">
              <label for="">Tanggal</label>
              <input type="date" name="tanggal" class="form-control">
            </div>
          </div>
          <div class="card-footer">
            <div class="d-flex justify-content-around">
              <a href="index.php" class="btn btn-danger btn-sm">Batal</a>
              <button type="submit" name="daftar" class="btn btn-primary btn-sm">Daftar</button>
            </form>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>