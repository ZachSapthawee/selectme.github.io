<?php
session_start();
if ($_SESSION["userLevel"] == "") {
    alert("กรุณา Login ก่อน");
    backtoindex();
    exit();
}
function alert($msg)
{
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
function backtoindex()
{
    echo "<script>  window.location.href='index.php'; </script>";
}
function backtomain()
{
    echo "<script>  window.location.href='main.php'; </script>";
}
$shipmentNo = $_GET['sn'];
$vehicle_id = $_GET['vehid'];
$agent_id = $_GET['aid'];

function EditSatus($vid){
    include("dblink.php");
    $sql="UPDATE vehicle
    SET status = 'use'
    WHERE vehicle_id = '$vid'";
    $query = mysqli_query($dbcon,$sql);
}

function AddBook($s,$a){
    include("dblink.php");
    $sql="INSERT INTO sm (shipmentNo, agentID, status )
    VALUES ($s, $a, 'Open');";
    $query = mysqli_query($dbcon,$sql);
}

?>
<!DOCTYPE html>
<html lang="en">

<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="css/style.css">

<head>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="js/active.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SM_SELECT ME</title>
    <meta name="keywords" content="ขนส่ง, รวมขนส่ง, บริการขนส่ง, ส่งด่วน, ส่งของTBL">
    <meta name="description" content="การส่งของราคาถูก จองขนส่งและชำระค่าบริการออนไลน์ได้ทันที ที่สำคัญไม่ต้องจ้างขนส่งข้างนอกแพง">
    <link rel="shortcut icon" href="img/smicon.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/fontpage.css">
</head>

<body>
    <header>
    <?php include("header.php");?> 
    </header>
    <section class="service-section">
        <div class="wrapper-1000"><br>

             <?php
                EditSatus($vehicle_id);
                AddBook($shipmentNo,$agent_id);
             ?>
             <h2>สำเร็จ!!</h2>
             <h3>เปิดใช้บริการให้จองรถ Shipment No :<?php echo $shipmentNo;?> แล้ว</h3> 
             <a href="openbook.php"  class="login-btn"  style="width:110px;"> กลับ </a>

        </div>
    </section>

</body>

</html>