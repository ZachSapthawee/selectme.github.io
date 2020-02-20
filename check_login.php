<?php   
    function alert($msg) {
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }    
    function backtoindex(){
        echo "<script>  window.location.href='index.php'; </script>";
    }
    session_start();
    if($_POST){
            include("dblink.php");
            $sql = "SELECT * FROM login WHERE username = '".mysqli_real_escape_string($dbcon,$_POST['input_username'])."' 
            and password = '".mysqli_real_escape_string($dbcon,$_POST['input_password'])."'";
            $query = mysqli_query($dbcon,$sql);
            $result = mysqli_fetch_array($query,MYSQLI_ASSOC);
                    if(!$result)
                    {
                        alert("ชื่อผู้ใช้ หรือรหัสผ่านไม่ถูกต้อง!");\
                        backtoindex();
                    }
                    else{
                        if($result["level"] == "agent")
                            {
                                $_SESSION["userLevel"] = $result["level"];
                                $_SESSION["agentId"] = $result["login_id"];
                                echo ($_SESSION["userLevel"]);
                                echo ($_SESSION["agentId"]);
                                header("location:main.php");
                            }
                            else
                            {
                                $_SESSION["userLevel"] = $result["level"];
                                echo ($_SESSION["userLevel"]);
                                header("location:main.php");
                            }
                    }}
                    else{
                        alert("กรุณาไปที่หน้าลงชื่อเข้าใช้");\
                        backtoindex();
                    }
?>