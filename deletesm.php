<?php
    function backtolist()
    {
        echo "<script>  window.location.href='listopen.php'; </script>";
    }
    $smid = $_GET['smid'];
    $vid = $_GET['vid'];
    include("dblink.php");
    $sql= "UPDATE sm SET sm_status = 'cancle' WHERE sm.sm_id = '$smid'";
    $query = mysqli_query($dbcon, $sql);

    $sql2 = "UPDATE vehicle SET status = 'free' WHERE vehicle.vehicle_id = '$vid'";
    $query2 = mysqli_query($dbcon, $sql2);
    backtolist();

?>