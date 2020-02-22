<?php
include("dblink.php");
$sql = "UPDATE sm
SET sm_status = 'bookp'
WHERE shipmentNo = '200003922'";
$query = mysqli_query($dbcon,$sql);
if($query){
    echo "<script type='text/javascript'>alert('ชำระเงินแล้ว');</script>";
    echo "<script>  window.location.href='remote.php'; </script>";
}
?>