<?php
include 'koneksi.php';
$Id = $_GET['Id'];

$sql_delete=("DELETE FROM tabel WHERE Id='$Id' ");

mysqli_query($conn,$sql_delete)or die(mysqli_error($conn));

echo '<script>
alert("Data Berhasil Dihapus");
location="index.php?"
</script>';

?>
