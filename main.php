<?php
    session_start();
    if($_SESSION["userLevel"]==""){
        alert("กรุณา Login ก่อน");
        backtoindex();
        exit();
    }
    function alert($msg) {
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }
    function backtoindex(){
        echo "<script>  window.location.href='index.php'; </script>";
    }
    function GetNameAgent($idAgent){
        include("dblink.php");
        $sql = "SELECT agent.agent_name FROM agent JOIN login on agent.login_id = login.login_id where agent_id = '$idAgent'";
        $query = mysqli_query($dbcon,$sql);
        $result = mysqli_fetch_array($query,MYSQLI_ASSOC);
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
        <div class="wrapper-1000">
            <h2>SELECT ME</h2>
            <h3>รวดเร็ว ฉับไว ใส่ใจบริการ</h3>
            <div class="service-box">
            <?php if($_SESSION['userLevel']=="agent"){ ?>
                <div class="service-item">
                    <div class="service-card"><a href="selectme_member.php" class="bug-service-card"></a> <img src="img/icon/icon_service_01.png" alt="selectme" height="65px">
                        <div class="title">ใช้บริการ Select Me</div>
                        <div class="service-caption">เลือกใช้บริการจองรถ</div>
                    </div>
                </div>
                <div class="service-item">
                    <div class="service-card"><a href="myrequest.php" class="bug-service-card"></a> <img src="img/icon/icon_service_02.png" alt="ประวัติการใช้บริการ" height="66px">
                        <div class="title">ประวัติการใช้บริการ</div>
                        <div class="service-caption">สรุปประวัติการใช้บริการ</div>
                    </div>
                </div>
                <div class="service-item">
                    <div class="service-card"><a href="tracking.php" class="bug-service-card"></a> <img src="img/icon/icon_service_03.png" alt="สถานะสินค้า" height="65px">
                        <div class="title">ติดตามสถานะ</div>
                        <div class="service-caption">ตรวจสอบสถานะการจัดส่งสินค้า</div>
                    </div>
                </div>
                <div class="service-item" >
                    <div class="service-card"><a href="report.php" class="bug-service-card"></a> <img src="img/icon/icon_service_05.png" alt="รายงาน" height="65px">
                        <div class="title">รายงาน</div>
                        <div class="service-caption">สรุปรายงาน</div>
                    </div>
                </div>
                <div class="service-item" >
                    <div class="service-card"><a href="special_discount.php" class="bug-service-card"></a> <img src="img/icon/icon_service_07.png" alt="รายงาน" height="65px">
                        <div class="title">คะแนน</div>
                        <div class="service-caption">สะสมไมล์เพื่อแลกส่วนลดพิเศษ</div>
                    </div>
                </div>
                <div class="service-item" >
                    <div class="service-card"><a href="promotion.php" class="bug-service-card"></a> <img src="img/icon/icon_service_06.png" alt="รายงาน" height="65px">
                        <div class="title">โปรโมชั่น</div>
                        <div class="service-caption">โปรโมชั่นสุดคุ้ม</div>
                    </div>
                </div>
                <?php }else{ ?>
                    <div class="service-item" >
                    <div class="service-card"><a href="openbook.php" class="bug-service-card"></a> <img src="img/icon/icon_service_08.png" alt="รายงาน" height="65px">
                        <div class="title">เปิดการจอง</div>
                        <div class="service-caption">เลือกรถที่จะเปิดให้บริการ</div>
                    </div>
                </div>
                <div class="service-item" >
                    <div class="service-card"><a href="#" class="bug-service-card"></a> <img src="img/icon/icon_service_06.png" alt="รายงาน" height="65px">
                        <div class="title">รายการทั้งหมด</div>
                        <div class="service-caption">ดูรายละเอียดรถที่เปิดจอง และติดตามสถานะ</div>
                    </div>
                </div>
                <div class="service-item" >
                    <div class="service-card"><a href="#" class="bug-service-card"></a> <img src="img/icon/icon_service_06.png" alt="รายงาน" height="65px">
                        <div class="title">รายงานสรุป</div>
                        <div class="service-caption">สรุปการใช้งานระบบ </div>
                    </div>
                </div>

                <?php }?>

                <div class="clear-float">&nbsp;</div>
            </div>
        </div>
    </section>

</body>
</html>
