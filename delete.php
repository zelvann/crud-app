<?php
require 'includes/header.php';
if(isset($_GET['nrp']) && delete($_GET['nrp'])) {
  return header('Location: index.php');
}
?>