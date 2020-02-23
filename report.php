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

function GetNameAgent($idAgent)
{
    include("dblink.php");
    $sql = "SELECT agent.agent_name FROM agent JOIN login on agent.login_id = login.login_id where agent_id = '$idAgent'";
    $query = mysqli_query($dbcon, $sql);
    $result = mysqli_fetch_array($query, MYSQLI_ASSOC);
    return $result['agent_name'];
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
    <title>SELECT ME</title>
    <meta name="keywords" content="ขนส่ง, รวมขนส่ง, บริการขนส่ง, ส่งด่วน, ส่งของTBL">
    <!--Keyword-->
    <meta name="description" content="การส่งของราคาถูก จองขนส่งและชำระค่าบริการออนไลน์ได้ทันที ที่สำคัญไม่ต้องจ้างขนส่งข้างนอกแพง">
    <link rel="shortcut icon" href="img/smicon.png" type="image/x-icon">


    <!-- <link rel="stylesheet" type="text/css" href="//www.shippop.com/assets/css/frontpage_v3.css?v=1.03484"> -->
    <link rel="stylesheet" type="text/css" href="css/fontpage.css">

</head>

<body>
    <header>
    <?php include("header.php");?> 
    </header>

    <section class="service-section">
        <div class="wrapper-1000">
            <h2>รายงาน</h2>
            <h3>สรุปรายงาน</h3>
            <div class="service-box">
            <?php if($_SESSION['userLevel']=="agent"){ ?>
                        <div class="service-item">
                            <div class="service-card"><a href="report_service.php" class="bug-service-card"></a> <img src="img/icon/icon_service_01.png" alt="selectme" height="65px">
                                <div class="title">รายงานสรุปการใช้บริการ</div>
                                <!-- <div class="service-caption">เลือกใช้บริการจองรถ</div> -->
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-card"><a href="report_status_sale.php" class="bug-service-card"></a> <img src="img/icon/icon_service_02.png" alt="ประวัติการใช้บริการ" height="66px">
                                <div class="title">รายงานสถานะการสั่งซื้อ</div>
                                <!-- <div class="service-caption">สรุปประวัติการใช้บริการ</div> -->
                            </div>
                        </div>
                        <div class="service-item" >
                            <div class="service-card"><a href="report_sale_order.php" class="bug-service-card"></a> <img src="img/icon/icon_service_05.png" alt="รายงาน" height="65px">
                                <div class="title">การสั่งซื้อสินค้า</div>
                                <!-- <div class="service-caption">สรุปรายงาน</div> -->
                            </div>
                        </div>

                <?php }else{ ?>

                    <div class="service-item">
                            <div class="service-card"><a href="report_service.php" class="bug-service-card"></a> <img src="img/icon/icon_service_01.png" alt="selectme" height="65px">
                                <div class="title">รายงานสรุปการใช้บริการ</div>
                                <!-- <div class="service-caption">เลือกใช้บริการจองรถ</div> -->
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-card"><a href="report_status_sale.php" class="bug-service-card"></a> <img src="img/icon/icon_service_02.png" alt="ประวัติการใช้บริการ" height="66px">
                                <div class="title">รายงานสถานะการจัดส่ง</div>
                                <!-- <div class="service-caption">สรุปประวัติการใช้บริการ</div> -->
                            </div>
                        </div>
                        <div class="service-item" >
                            <div class="service-card"><a href="report_sale_order.php" class="bug-service-card"></a> <img src="img/icon/icon_service_05.png" alt="รายงาน" height="65px">
                                <div class="title">การสั่งซื้อสินค้า</div>
                                <!-- <div class="service-caption">สรุปรายงาน</div> -->
                            </div>
                        </div>

                        <div class="service-item" >   
                            <div class="service-card"><a href="tablecar_Report.php" class="bug-service-card"></a> <img src="img/icon/icon_service_11.png" alt="รายงาน" height="65px">
                                <div class="title">รายงานการใช้รถ SelectMe</div>
                                <!-- <div class="service-caption"></div> -->
                            </div>
                        </div> 

                <?php }?>

                <div class="clear-float">&nbsp;</div>
            </div>
        </div>
    </section>

</body>

</html>