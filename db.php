<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'gamorsweb'
) or die(mysqli_erro($mysqli));

?>
