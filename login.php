<?php
    include 'dbconn.php';
    if(isset($_POST['submit'])){
        $username=$_POST['username'];
        $pass=$_POST['pass'];

        if($username=='Admin'){
            if($pass=='123'){
                setcookie("User",$username,time() + 3600,"/");
                header('Location: /CashPlan/');
            }else{
                $str="Wrong Password";
            }
        }else{
            $str="Wrong Username";
        }


    }
?>



<html>
    <head>
        <link rel="stylesheet" href="style/myStyle.css">
        <style>
            body{
                background-color:#111;
            }
            tr, td{
                width:100%;
            }
            input{
                width:100%;
                height:5vh;
                border-radius:5px;
            }
        </style>
    </head>

    <body>

        <div class="login-box">
            <form method="POST">
                <table class="form-table" style="width:100%;">
                    <?php if(isset($str)): ?>
                        <tr style="color:red;"><td><?=$str?></td></tr>
                    <?php endif; ?>
                    <tr>
                        <td><input type="text" name="username" placeholder="Username"></td>
                    </tr>
                    <tr>
                        <td><input type="password" name="pass" placeholder="Password"></td>
                    </tr>
                    <tr>
                        <td><button class="submit-button" type="submit" name="submit">Login</button></td>
                    </tr>
                    
                </table>
            </form>
            
        </div>
    </body>

    <script>
        window.onload= function(){
            document.getElementsByClassName('login-box')[0].style.top="50%";
            document.getElementsByClassName('login-box')[0].style.opacity="1.0";
        };
    </script>
</html>