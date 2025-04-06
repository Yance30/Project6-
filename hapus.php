<?php
include 'config.php';

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM data WHERE id=$id") or die(mysqli_error($conn));

header("Location: index.php");
exit();
?>
