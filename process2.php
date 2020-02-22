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
        <?php include("header.php"); ?>
    </header>


    <section class="service-section">
     
            <br><br>
            <h2>เลือก SubAgent</h2>
            <form action="">
     
            <table width="90%">
            <tr>
            <td>
            <?php 
                include("dblink.php");
                $aid =  $_SESSION['agentId'];
                $sql = "SELECT * FROM `sub-agent` 
                WHERE agent_id = '$aid'";
                $query = mysqli_query($dbcon,$sql);
                if(!$query){
                }
                while($result = mysqli_fetch_assoc($query))
                 {                
             ?>     
             
             <div style="text-align: left;">
                    <input type="checkbox" id="" name="" value="<?php $result['subagent_id']; ?>">
                    <label > <?php echo $result['subagent_name']; ?></label><br>
            </div>
            
                 <?php } ?>
                 </td> </tr>
                 </table>
                 </div>
                    </form><br>
                    <div><a href="process3.php" class="btn btn-primary"> คำนวณราคา</a></div>
            
    </section>
    <script>
        var jsonObj = [{
                "location": "Ontrade 2",
                "lat": "15.071245",
                "lng": "102.201012"
            },
            {
                "location": "ห้างหุ้นส่วนจำกัด พิพัฒนโชติ",
                "lat": "15.03577",
                "lng": "102.117808"
            },
            {
                "location": "บจก.มั่นทรัพย์เจริญ เซอร์วิส",
                "lat": "14.993942",
                "lng": "102.096508"
            },
            {
                "location": "หจก.เสรีวัฒน์ การสุรา",
                "lat": "14.977936",
                "lng": "102.094431"
            }
        ]

        function initMap() {
            var mapOptions = {
                center: {
                    lat: 15.026709,
                    lng: 102.135567
                },
                zoom: 11,
            }

            var maps = new google.maps.Map(document.getElementById("map"), mapOptions);

            var marker, info;

            $.each(jsonObj, function(i, item) {

                marker = new google.maps.Marker({
                    position: new google.maps.LatLng(item.lat, item.lng),
                    map: maps,
                    title: item.location
                });

                info = new google.maps.InfoWindow();

                google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                        info.setContent(item.location);
                        info.open(maps, marker);
                    }
                })(marker, i));

            });

        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAa_CaAMgAL1Bns5vPeP9kZjQu2dBpJkUA&callback=initMap" async defer></script>
</body>

</html>