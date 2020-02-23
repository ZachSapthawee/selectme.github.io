<?php
include("dblink.php");
$sql = "DELETE FROM sm";
$query = mysqli_query($dbcon,$sql);

$sql2 = "UPDATE vehicle SET vehicle.status = 'free'";
$query2 = mysqli_query($dbcon,$sql2);

if($query&&$query2){
    echo "<script type='text/javascript'>alert('รีเซ็ตแล้ว');</script>";
    echo "<script>  window.location.href='remote.php'; </script>";
}
?>