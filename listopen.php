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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
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
    
    <div class="container"style="width:auto;margin:0 auto;" width="70%">
    <h2>รายการทั้งหมด</h2>
             <h3>รายละเอียดรถที่เปิดจอง และติดตามสถานะ</h3> 
  <table width="80%" class="table table-borderless table-striped">
  <thead>
    <tr>
      <th width="20%" scope="col">Shipment No</th>
      <th width="15%" scope="col">ทะเบียนรถ</th>
      <th width="15%" scope="col">ประเภทรถ</th>
      <th width="20%" scope="col">วันที่จัดส่ง</th>
      <th width="25%" scope="col">สถานะบริการ</th>
      <th width="20%" scope="col">ยกเลิก</th>
    </tr>
  </thead>
  <tbody>
  <?php 
    include("dblink.php");
    $sql = "SELECT * FROM sm JOIN shipment ON sm.shipmentNo = shipment.shipmentNo JOIN vehicle ON shipment.vehicle_id = vehicle.vehicle_id ORDER BY sm_id desc";
    $query = mysqli_query($dbcon,$sql);
    while($result = mysqli_fetch_assoc($query))
                {
  ?>
    <tr>
      <td><b><a style="color:#0b9dd2"><?php echo $result['shipmentNo'];?></a></b></td>
      <td><?php echo $result['vehicle_regnum'];?></td>
      <td><?php if($result['vehicle_type']=="4w"){ 
            echo "4 ล้อ";
        }else{
            echo "6 ล้อ"; 
          }
      ?></td>
      <td><?php
      $dateData=$result['date'];
      $newdate = thai_date_short_number(strtotime($dateData)); // 19 ธันวาคม 2556 เวลา 10:17:48 
      echo $newdate; ?></td>
      <td><?php 
      if($result['sm_status']=="open"){
          echo "<b><a style=\"color:green\">เปิดให้จอง</a></b>";
      }elseif ($result['sm_status']=="cancle") {
          echo "<b><a style=\"color:red\">ยกเลิกให้บริการ</a></b>";
      }
      elseif ($result['sm_status']=="book") {
        echo "<b><a style=\"color:#1669b3\">ลูกค้าจองแล้ว(ยังไม่ชำระเงิน)</a></b>";
        }
    elseif ($result['sm_status']=="bookp") {
        echo "<b><a style=\"color:#1669b3\">ลูกค้าจองแล้ว(ชำระเงินแล้ว)</a></b>";
        }elseif ($result['sm_status']=="success") {
            echo "<b><a style=\"color:#b2b2b2\">บริการเสร็จสิ้น</a></b>";
            }
    
      ?></td>
      <td><?php 
      if($result['sm_status']=="open"){
          echo "<b><a href=\"deletesm.php?smid=".$result['sm_id']."&vid=".$result['vehicle_id']."\" style=\"color:red\">[X]</a></b>";
      }
  
      ?></td>
    </tr>
                <?php } ?>
  </tbody>
</table>
</div>
        
        </div>
    </section>

</body>

</html>