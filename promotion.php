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
    <section class="section_promo">
        <div class="wrapper-1000">
            <h2 style="margin: 20px">โปรโมชั่น</h2>
            <!-- <h3>ทำให้การส่งสินค้า สะดวกและง่ายมากขึ้น</h3> -->
            <div class="button_promotion">
                <img src="img/cover_promotion.jpg" alt="">
                <div>
                    <button class="button_promotion1">
                        โปรโมชั่น 1 <br>
                        ฿600.00
                    </button>
                    <button class="button_promotion2">
                        โปรโมชั่น 2 <br>
                        ฿1,600.00
                    </button>
                    <button class="button_promotion3">
                        โปรโมชั่น 3 <br>
                        ฿1,800.00
                    </button>
                </div>
                
                
            </div>
            <div class="button_promotion_sale">
                    save ฿500.00
            </div>
            <div class="button_promotionVouchers">
                    <div class="title"> <b>What's in Your Plan</b></div>
                    <div class="service-caption">EXPRESS Vouchers</div>
                    <div class="service-captionparkage">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam animi officiis quod id ad, ullam dolorum possimus minus aliquid nobis facere rem vero saepe aut molestias est atque neque provident?</div>
            </div>

        </div>
    </section>

</body>

</html>