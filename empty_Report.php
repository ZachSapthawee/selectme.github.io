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
        <div class="top_menu_mobile_toggle">
            <div class="header-mobile">
                <div class="padding-mobile">
                    <div class="left-menu">
                        <a class="logo-mobile" href="main.php" title="SELECTME"><img alt="SELECTME" height="32" src="img/Logo_SM.png"></a>
                    </div>
                    <div class="right-menu">
                        <a data-name="shortcut-tracking" class="a-mobile" href="tracking.php"><i class="fa fa-truck fa-2x "></i></a>
                        <a data-name="shortcut-openmenu" class="a-mobile show-menu-mobile" href="#"><i class="fa fa-bars fa-2x"></i></a>
                    </div>
                    <div class="clear-float"></div>
                </div>
            </div>
            <div class="toolbar ">
                <ul class="main-menu">
                    <li class="li-header">ชื่อผู้ใช้ : <?php if ($_SESSION['userLevel'] == "agent") {
                                                            echo GetNameAgent($_SESSION['agentId']);
                                                        } else {
                                                            echo "คุณวิน (Admin)";
                                                        } ?> <br></li>
                    <li class="li-menu"><a data-name="home" href="tracking.php">ติดตามสถานะ</a></li>
                    <li class="li-menu"><a data-name="contact" href="contact.php">ติดต่อเรา</a></li>
                    <li class="li-menu"><a data-name="sum" href="report.php">รายงาน</a></li>
                    <li class="li-menu"><a data-name="logout" href="logout.php" style="color:red;">ออกจากระบบ</a></li>

                    <div class="clear-float"></div>
                    <li class="li-etc">
                        <div>
                            <span style="font-weight:800">ติดต่อเรา</span><br>
                            บริษัท ไทยเบฟเวอเรจ จำกัด (มหาชน)
                            เลขที่ 14 ถนนวิภาวดีรังสิต แขวงจอมพล เขตจตุจักรกรุงเทพมหานคร 10900<br>
                            <br>
                            โทร. (02) 785 5555<br>
                            Facebook : www.facebook.com/ThaiBeverage </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="nav-full">
            <div class="inner-nav-full">
                <div class="left-menu">
                    <a href="main.php" title="SMselectmelogo"><img class="logo-shippop" alt="SMselectmelogo" src="img/Logo_SM.png"></a>
                    <nav>
                        <div class="li-front-menu">
                            <a data-name="home" class="member-menu active" href="main.php">
                                หน้าแรก </a>
                        </div>
                        <div class="li-front-menu">
                            <a data-name="contact" class="member-menu " href="contact.php">
                                ติดต่อเรา </a>
                        </div>
                        <div class="clear-float"></div>
                    </nav>
                </div>
                <div class="right-menu">
                    <div>
                        <div class="right-sub-right-menu">
                            ชื่อผู้ใช้ : <b> <?php //if ($_SESSION['userLevel'] == "agent") {
                                                // echo GetNameAgent($_SESSION['agentId']);
                                                //} else {
                                                //  echo "คุณวิน (Admin)";
                                                // } 
                                                ?>
                            </b>
                            <a href="logout.php"><button type="button" class="login-btn" style="width:110px;"> ออกจากระบบ </button> </a>
                        </div>
                    </div>
                    <div class="clear-float"></div>
                    <div style="margin-top:7px;">
                        <form action="#" method="get">

                            <input type="text" name="tracking_code" class="search-box" placeholder="กรอกหมายเลขติดตามการส่งสินค้า" autocomplete="off">
                            <button class="btn-search"><img alt="" src="//www.shippop.com/assets/images/frontpage/icon_search.png?v=1.03484"></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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