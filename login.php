<?php
    echo "Kiem tra git ngay 15/3/2024";

    if(isset($_POST["btn_login"])){
        $error = array();
        if(empty($_POST["username"])){
            $error["username"] = "Không được để trống username";        
        }else{
            $username = $_POST["username"];
        }
        if(empty($_POST["password"])){
            $error["password"] = "Không được để trống password";        
        }else{
            $password = $_POST["password"];
        }
    
        if(empty($error)){
            $data = array(
                'username' => "admin",
                'password' => "admin",
    
            );
            if(($username == $data['username']) && ($password == $data['password'])){
                header('Location: index.php'); 
                exit();   
            }
            else{
                echo "Sai thông tin";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="username">tên đăng nhập</label>
        <input type="text" name="username" id="username">
        <label for="password">mật khẩu</label>
        <input type="password" name="password" id="password">
        <input type="submit" name="btn_login" value="đăng nhập">
    </form>
</body>
</html>
