<?php
require 'includes/header.php';
if(isset($_GET['id']) && delete($_GET['id'])) {
  return header('Location: index.php');
}
?>