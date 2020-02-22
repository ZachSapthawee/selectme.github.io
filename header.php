<div class="top_menu_mobile_toggle">
    <div class="header-mobile">
        <div class="padding-mobile">
            <div class="left-menu">
                <a class="logo-mobile" href="main.php" title="SELECTME"><img alt="SELECTME" height="32" src="img/Logo_SM.png"></a>
            </div>
            <div class="right-menu">
                <a data-name="shortcut-tracking"    class="a-mobile" href="tracking.php"><i class="fa fa-truck fa-2x "></i></a>
                <a data-name="shortcut-openmenu"    class="a-mobile show-menu-mobile" href="#"><i class="fa fa-bars fa-2x"></i></a>
            </div>
             <div class="clear-float"></div>
            </div>
            </div>
                <div class="toolbar ">
                <ul class="main-menu">
                    <li class="li-header">ชื่อผู้ใช้ : <?php  if($_SESSION['userLevel']=="agent"){echo GetNameAgent($_SESSION['agentId']); } else{echo "ศูนย์กระจายสินค้า นครราชสีมา"; }?> <br></li>
                    <li class="li-menu"><a data-name="home" href="main.php">หน้าหลัก</a></li>
                    <?php if($_SESSION['userLevel']=="agent"){ ?>
                    <li class="li-menu"><a data-name="service" href="#">บริการ SelectMe</a></li>
                    <li class="li-menu"><a data-name="history" href="#">ประวัติการใช้งาน</a></li>
                    <li class="li-menu"><a data-name="contact" href="contact.php">ติดต่อเรา</a></li>
                    <?php }else{ ?>
                        <li class="li-menu"><a data-name="home" href="openbook.php">เปิดการจองรถ</a></li>
                    <li class="li-menu"><a data-name="home" href="listopen.php">รายการทั้งหมด</a></li>
                    <li class="li-menu"><a data-name="service" href="#">รายงานสรุป</a></li>
                 
                    <?php }?>
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

<?php if($_SESSION['userLevel']=="agent"){ ?>

<div class="li-front-menu">
    <a data-name="home" class="member-menu" href="main.php">
        หน้าแรก </a>
</div>

<div class="li-front-menu">
    <a data-name="home" class="member-menu" href="#">
        บริการ SelectMe </a>
</div>
<div class="li-front-menu">
    <a data-name="home" class="member-menu" href="#">
        ประวัติการใช้งาน </a>
</div>

<?php }else{ ?>

<div class="li-front-menu">
    <a data-name="home" class="member-menu" href="main.php">
        หน้าหลัก </a>
</div>

<div class="li-front-menu">
    <a data-name="home" class="member-menu" href="listopen.php">
        รายการทั้งหมด </a>
</div>

<div class="li-front-menu">
    <a data-name="home" class="member-menu" href="#">
        รายงานสรุป </a>
</div>
    
<?php }?>

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
                        ชื่อผู้ใช้ : <b><?php  if($_SESSION['userLevel']=="agent"){echo GetNameAgent($_SESSION['agentId']); } else{echo "ศูนย์กระจายสินค้า นครราชสีมา"; }?>
                                    </b>
                        <a href="logout.php" ><button type="button" class="login-btn" style="width:110px;" > ออกจากระบบ </button> </a>
                    </div>
                </div>
                    <div class="clear-float"></div>
                    <div style="margin-top:7px;">
                        <form action="tracking.php" method="get">
                            
                            <input type="text" name="tracking_code" class="search-box" placeholder="กรอกหมายเลขติดตามการส่งสินค้า" autocomplete="off">
                            <button class="btn-search"><img alt="" src="//www.shippop.com/assets/images/frontpage/icon_search.png?v=1.03484"></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>