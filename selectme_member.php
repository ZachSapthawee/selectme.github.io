<?php
session_start();
include("dateformat.php");
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
        <?php include("header.php"); ?>
    </header>
    <section class="section_promo">
        <div class="wrapper-1000">
            <h2>ใช้บริการ SelectMe</h2>
            <?php
            include("dblink.php");
            $aid =  $_SESSION['agentId'];
            $sql = "SELECT * FROM sm 
            JOIN shipment 
            ON sm.shipmentNo = shipment.shipmentNo 
            JOIN vehicle 
            ON shipment.vehicle_id = vehicle.vehicle_id 
            WHERE sm.agentID = '$aid' AND sm.sm_status ='open'";
            $query = mysqli_query($dbcon, $sql);
            if (!$query) {
            }
            while ($result = mysqli_fetch_assoc($query)) {

            ?>
                <div class="service-box">
                    <div class="service-itemselect">
                        <div class="service-card_select">
                            <div class="col_left">
                                <div><b>Shipment No : </b><?php echo $result['shipmentNo']; ?></div>
                                <div><b>วันและเวลาที่คาดว่าจะถึง : </b><?php
                                                                        $dateData = $result['date'];
                                                                        $newdate = thai_date_short_number(strtotime($dateData));
                                                                        echo $newdate; ?></div>
                                <div><b>ต้นทาง : </b><?php echo $result['shipFrom']; ?></div>
                                <div><b>ประเภทรถ : </b> <?php if ($result['vehicle_type'] == "4w") {
                                                            echo "4 ล้อ";
                                                        } else {
                                                            echo "6 ล้อ";
                                                        }
                                                        ?></div>
                            </div>
                            <div class="col_Right"></div>
                            <img src="<?php
                                        if ($result['vehicle_type'] == "6w") {
                                            echo "img/truck/6WHEELS_Truck.png";
                                        } elseif ($result['vehicle_type'] == "10w") {
                                            echo "img/truck/10WHEELS_Truck.png";
                                        } else {
                                            echo "img/truck/4WHEELS_Truck.png";
                                        } ?>" alt="รถบรรทุก" height="45px" style="margin: 10px;">
                            <div><a href="select_sub.php" class="btn btn-primary btn-sm"> ใช้งาน SelectMe</a></div>
                        </div>
                    </div>
                </div>
        </div>

    <?php } ?>
    </div>
    </section>

</body>

</html>