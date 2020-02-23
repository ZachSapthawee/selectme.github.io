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
    <section>

        <h2>RDC โคาราช</h2>
        <div class="table_Report">
            <table>
                <tr>
                    <th>Day</th>
                    <th>จันทร์</th>
                    <th>อังคาร</th>
                    <th>พุธ</th>
                    <th>พฤหัสบดี</th>
                    <th>ศุกร์</th>
                    <th>ต้นทุน(THB)</th>
                </tr>
                <tr>
                    <td>สร812310</td>
                    <td>
                        <a>ขนสินค้าปกติ<br></a>
                        <a>Select Me</a>
                    </td>
                    <td>
                        <a>ขนสินค้าปกติ<br></a>
                    </td>
                    <td>
                        <a>ขนสินค้าปกติ<br></a>
                        <a>Select Me</a>
                    </td>
                    <td>
                        <a>ขนสินค้าปกติ<br></a>
                    </td>
                    <td>
                        <a>ขนสินค้าปกติ<br></a>
                    </td>
                    <td>
                        <a>- 2,000<br></a>
                        <a>+ 1,200</a>
                    </td>
                </tr>
                <tr>
                    <td>นม842356</td>
                    <td>
                        <a>ขนสินค้าปกติ<br></a>
                    </td>
                    <td>
                        <a>ขนสินค้าปกติ<br></a>
                        <a>Select Me</a>
                    </td>
                    <td>
                        <a>ขนสินค้าปกติ<br></a>
                        <a>Select Me</a>
                    </td>
                    <td>
                        <a>ขนสินค้าปกติ<br></a>
                    </td>
                    <td>
                        <a>ขนสินค้าปกติ<br></a>
                        <a>Select Me</a>
                    </td>
                    <td>
                        <a>- 5,000<br></a>
                        <a>+ 3,000</a>
                    </td>
                </tr>
                <tr>
                    <td>กท641898</td>
                    <td>
                        <a>ขนสินค้าปกติ<br></a>
                        <a>Select Me</a>
                    </td>
                    <td>
                        <a>ขนสินค้าปกติ<br></a>
                        <a>Select Me</a>
                    </td>
                    <td>
                        <a>ขนสินค้าปกติ<br></a>
                        <a>Select Me</a>
                    </td>
                    <td>
                        <a>ขนสินค้าปกติ<br></a>
                    </td>
                    <td>
                        <a>ขนสินค้าปกติ<br></a>
                        <a>Select Me</a>
                    </td>
                    <td>
                        <a>- 10,000<br></a>
                        <a>+ 8,000</a>
                    </td>
                </tr>
                <tr>
                    <td>กท641902</td>
                    <td>
                        <a>ขนสินค้าปกติ<br></a>
                        <a>Select Me</a>
                    </td>
                    <td>
                        <a>ขนสินค้าปกติ<br></a>
                        <a>Select Me</a>
                    </td>
                    <td>
                        <a>ขนสินค้าปกติ<br></a>
                        <a>Select Me</a>
                    </td>
                    <td>
                        <a>ขนสินค้าปกติ<br></a>
                        <a>Select Me</a>
                    </td>
                    <td>
                        <a>ขนสินค้าปกติ<br></a>
                    </td>
                    <td>
                        <a>- 10,000<br></a>
                        <a>+ 7,000</a>
                    </td>
                </tr>
            </table>
        </div>

    </section>
</body>

</html>