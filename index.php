<?php
require 'includes/header.php';

$getUrl = $_SERVER['REQUEST_URI'];
$uri = explode('/', $getUrl);
if($uri[2] == '' || $uri[2] == 'index.php') {
  $minings =  All('tugas6pweb');
}
?>

<div class="container my-4">
  <h3>PostgreSQL | CRUD</h3>
  <div class="row custom d-none">
    <div class="col"></div>
  </div>
  <div class="row">
    <div class="col">
      <div class="card shadow">
        <div class="card-body">
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">NRP</th>
                <th scope="col">Departemen</th>
                <th scope="col">Asal</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Tindakan</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($minings as $key => $mining): ?>
              <tr>
                <th scope="row"><?= $key + 1 ?></th>
                <td><?= $mining['nama'] ?></td>
                <td><?= $mining['nrp'] ?></td>
                <td><?= $mining['departemen'] ?></td>
                <td><?= $mining['asal'] ?></td>
                <td><?= $mining['mining_at'] ?></td>
                <td>
                  <a href="update.php?id=<?= $mining['nrp'] ?>" class="btn btn-primary shadow"><img src="icon/pencil.svg" width="20"></a>
                  <a href="delete.php?id=<?= $mining['nrp'] ?>" class="btn btn-danger shadow" onclick="return confirm('Data akan terhapus')"><img src="icon/trash.svg" width="20"></a>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col col-2 text-center side-navbar">
      <div class="card shadow">
        <div class="card-body">
          <a href="form.php" class="btn btn-primary btn-sm">Daftar</a>
        </div>
      </div>
    </div>
  </div>
</div>