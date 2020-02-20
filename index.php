<?php

?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="css/style.css"> 

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/fontpage.css">
    <title>login</title>
    <meta name="keywords" content="ขนส่ง, รวมขนส่ง, บริการขนส่ง, ส่งด่วน, ส่งของTBL">  
    <meta name="description" content="การส่งของราคาถูก จองขนส่งและชำระค่าบริการออนไลน์ได้ทันที ที่สำคัญไม่ต้องจ้างขนส่งข้างนอกแพง">
    <link rel="shortcut icon" href="img/smicon.png" type="image/x-icon"> 
</head>
<body>
    <div class="login-wrapper">
            <div class="login-page-wrapper">
                <img class="logo-img" src="img/Logo_SM.png" alt="Selectme" height="90">
                <br>
                    <div class="sp-form-wrapper">
                        <form action="check_login.php" method="post" id="form-login">
                            <div class="form-group ">
                                <label class="control-label">สำหรับเข้าสู่ระบบ</label>
                                <input name="input_username" type="text" class="form-control" required=""> <span class="help-block"></span>
                            </div>
                            <div class="form-group ">
                                <label class="control-label">รหัสผ่านเข้าสู่ระบบ</label>
                                <input name="input_password" type="password" class="form-control"  required=""> <span class="help-block"></span>
                            </div>
                         
                            <div class="sp-form-button">
                                <button type="submit" class="btn-reset button-sp-default button-login">เข้าสู่ระบบ</button>
                            </div>
                            <input type="hidden" name="redirect_url" value="">
                        </form>
  
                        <div class="sp-form-button">
                            <a href="#" class="btn-reset button-facebook button-login">ลืมรหัสผ่าน</a>
                            
                        </div>
                        
                    </div>
            </div>
    </div>

    

</body>
</html>