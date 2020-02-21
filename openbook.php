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
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
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
            <h2>เปิดการจองรถ</h2>
            <h3>เลือกรถที่ต้องการให้ Agent ใช้บริการ</h3>

            <div class="service-box">

        
            
            <?php
                include("dblink.php");
                $sql = "SELECT *
                FROM vehicle 
                INNER JOIN shipment 
                ON shipment.vehicle_id=vehicle.vehicle_id
                INNER JOIN agent
                ON agent.agent_id=shipment.agent_id
                WHERE shipment.shipFrom = 'NAKHONRATCHASIMA_RDC' 
                AND vehicle.status = 'FREE'
                ";
                $query = mysqli_query($dbcon,$sql);
                while($result = mysqli_fetch_assoc($query))
                {
                ?>

                <div class="service-item">
                    <div class="service-card"><a onclick="return confirm('ยืนยันเปิดให้จอง Shipment No : <?php echo $result['shipmentNo'];?> ')" href="confirmopen.php?sn=<?php echo $result['shipmentNo'];?>&vehid=<?php echo $result['vehicle_id'];?>&aid=<?php echo $result['agent_id'];?>" class="bug-service-card"></a><br> <img width="<?php 
                    if($result['vehicle_type']=="6w"){
                        echo "100px";
                    }elseif($result['vehicle_type']=="10w"){
                        echo "155px";
                    }else{
                        echo "75px";
                    } ?>" src="<?php 
                    if($result['vehicle_type']=="6w"){
                        echo "img/truck/6WHEELS_Truck.png";
                    }elseif($result['vehicle_type']=="10w"){
                        echo "img/truck/10WHEELS_Truck.png";
                    }else{
                        echo "img/truck/4WHEELS_Truck.png";
                    } ?>">
                        <div><b>Shipment No : <a style="color:#030546;"> <?php echo $result['shipmentNo'];?></b></a></div>
                        <div><b>ทะเบียนรถ : <a> <?php echo $result['vehicle_regnum']; ?></b></a></div>
                        <div><b>วันที่ส่งสินค้า :</b> 20/02/2563</div>
                        <div><b>ผู้รับ : <a style="color:#00a4f2;"><?php echo $result['agent_name'];?></a></b></div>
                    </div>
                </div>

            <?php
                }
            ?>
            
            </div>
            <div class="clear-float">&nbsp;</div>
        </div>
    </section>

</body>
</html>