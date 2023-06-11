<?php
include "koneksidb.php";
$id = $_GET["id"];
$sql = "DELETE FROM `data` WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: crud.php?msg=Data berhasil dihapus!");
} else {
  echo "Failed: " . mysqli_error($conn);
}
