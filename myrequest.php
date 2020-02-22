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
    <meta name="description" content="การส่งของราคาถูก จองขนส่งและชำระค่าบริการออนไลน์ได้ทันที ที่สำคัญไม่ต้องจ้างขนส่งข้างนอกแพง">
    <link rel="shortcut icon" href="img/smicon.png" type="image/x-icon">


    <link rel="stylesheet" type="text/css" href="css/fontpage.css">

</head>

<body>
    <header>
    <?php include("header.php");?> 
    </header>
<!-- 
    <section class="service-section">
        <div class="wrapper-1000">
            <h2>รายการที่ใช้บริการ</h2>
            <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
            <div class="service-box">
                
            </div>
        </div>
    </section> -->
    <section class="service-section">
        <div class="wrapper-1000">
            <h2>ประวัติการใช้บริการ</h2>
            <!-- <h3>ทำให้การส่งสินค้า สะดวกและง่ายมากขึ้น</h3> -->
            <div class="service-box">
                <div class="service-itemselect">
                    <div class="service-card_select">
                            <div class="col_left">
                                    <div><b">สถานะ : </b><b style="color:red">รอชำระเงิน</b></div>
                                    <div><b>Shipment No : 200151807</b></div>
                                    <div><b>วันที่จัดส่ง : 2/3/2020 10:18:01 AM </b></div>
                                    <div><b>จาก : ธนสินซูเปอร์สโตร์ </b></div>
                                    <div><b>ส่งถึง : หจก.ยู-เกียรย์สมาร์ทช๊อป</b></div>
                                    
                            </div>
                            <div class="col_Right">
                                    <img src="img/truck/6WHEELS_Truck.png" alt="รถบรรทุก" height="45px" style="margin: 10px;">
                                    <!-- <div><button type="button" class="btn_select"><i class="fa fa-key"></i> เลือกรถ </button></div> -->
                            </div>
                    </div>
                </div>
            </div>
            <div class="service-box">
                <div class="service-itemselect">
                    <div class="service-card_select">
                            <div class="col_left">
                                    <div><b">สถานะ : </b><b style="color:cornflowerblue">ชำระเงินแล้ว</b></div>
                                    <div><b>Shipment No : 200152954</b></div>
                                    <div><b>วันที่จัดส่ง : 2/3/2020 12:19:43 PM</b></div>
                                    <div><b>จาก : ธนสินซูเปอร์สโตร์ </b></div>
                                    <div><b>ส่งถึง : หจก.พัฒนาทวีคูณ 2015</b></div>
                                    
                            </div>
                            <div class="col_Right">
                                    <img src="img/truck/6WHEELS_Truck.png" alt="รถบรรทุก" height="45px" style="margin: 10px;">
                                    <!-- <div><button type="button" class="btn_select"><i class="fa fa-key"></i> เลือกรถ </button></div> -->
                            </div>
                    </div>
                </div>
                <div class="service-box">
                <div class="service-itemselect">
                    <div class="service-card_select">
                            <div class="col_left">
                                    <div><b">สถานะ : </b><b style="color:gold">กำลังจัดส่งสินค้า</b></div>
                                    <div><b>Shipment No : 200154760</b></div>
                                    <div><b>วันที่จัดส่ง : 2/3/2020 12:17:57 PM</b></div>
                                    <div><b>จาก : ธนสินซูเปอร์สโตร์ </b></div>
                                    <div><b>ส่งถึง : ร้านกังวานขนส่ง</b></div>
                            </div>
                            <div class="col_Right">
                                    <img src="img/truck/6WHEELS_Truck.png" alt="รถบรรทุก" height="45px" style="margin: 10px;">
                                    <!-- <div><button type="button" class="btn_select"><i class="fa fa-key"></i> เลือกรถ </button></div> -->
                            </div>
                    </div>
                </div>
                <div class="service-box">
                <div class="service-itemselect">
                    <div class="service-card_select">
                            <div class="col_left">
                                    <div><b">สถานะ : </b><b style="color:green">จัดส่งสำเร็จ</b></div>
                                    <div><b>Shipment No : 200152960</b></div>
                                    <div><b>วันที่จัดส่ง :  2/3/2020 4:45:13 PM</b></div>
                                    <div><b>จาก : ธนสินซูเปอร์สโตร์ </b></div>
                                    <div><b>ส่งถึง : ธิทธิชัยพานิจ</b></div>
                                    
                            </div>
                            <div class="col_Right">
                                    <img src="img/truck/6WHEELS_Truck.png" alt="รถบรรทุก" height="45px" style="margin: 10px;">
                                    <!-- <div><button type="button" class="btn_select"><i class="fa fa-key"></i> เลือกรถ </button></div> -->
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>