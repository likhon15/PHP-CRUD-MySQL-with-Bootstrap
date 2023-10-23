<?php
include "connect.php";

$id = $_GET['id'];
$sql = "DELETE FROM `data` WHERE `index` = $id";
$result = mysqli_query($con, $sql);

if ($result) {
    // Perform the redirect before any content is echoed
    header("Location: list.php");
    exit; // Terminate the current script to ensure the redirect is processed
} else {
    echo "failed";
}
?>
