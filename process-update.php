<?php
require 'includes/header.php';
if(isset($_POST['update']) && update($_POST)) {
  return header('Location: index.php');
}
?>