<?php
function All($tbname) {
  global $conn;
  $qry = "SELECT * FROM " . $tbname;
  $res = pg_query($conn,$qry);

  if(!$res) {
    echo "Error when mining data";
    exit;
  }

  while($row = pg_fetch_assoc($res)) {
    $results[] = $row;
  }
  return $results;
}

function byNRP($id) {
  global $conn;
  $qry = "SELECT * FROM tugas6pweb WHERE nrp = " . $id;
  $res = pg_query($conn,$qry);

  if(!$res) {
    echo "Error when mining data";
    exit;
  }

  while($row = pg_fetch_assoc($res)) {
    $results[] = $row;
  }
  return $results[0];
}

function insert($data) {
  global $conn;
  $dname = $data['nama'];
  $dnrp = $data['nrp'];
  $ddpt = $data['departemen'];
  $dasal = $data['asal'];
  $dmining = $data['tanggal'];
  $qry = "INSERT INTO tugas6pweb VALUES('$dname','$dnrp','$ddpt','$dasal','$dmining')";
  $res = pg_query($conn,$qry);
  return pg_affected_rows($res);
}

function delete($id){
  global $conn;
  $qry = "DELETE FROM tugas6pweb WHERE nrp = '" . $id . "'";
  $res = pg_query($conn,$qry);
  return pg_affected_rows($res);
}