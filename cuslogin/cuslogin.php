<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cuslogin.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="icon" href="../img/homeicon.png" type="image/x-icon">
    <title>FlyEasy Login</title>
    <?php 
        $error=$_GET['error'];
        if($error=='error')
        {
            $display='block';
        }  
        else
            $display='none';
    ?>

</head>
<body>  
    <div class="container">
    <div class="navigation">
            <img style="width: 35px;height: 35px; color:green ;" src="../img/homeicon.png" alt="logo" type="image/x-icon">
            <div class="nav-right">
                <div class="home">
                    <a href="../home.html">
                        <span class="material-icons-outlined">
                            home
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="sub-div">
            <div class="left-div">
                <div class="heading">
                    <h1 class="h1">FlyEasy</h1>
                    <h1 class="h2">Flight</h1>
                    <h1 class="h3">booking</h1>
                </div>
                <img src="../img/homeplane.png" alt="fruitsalid"class="img2">
            </div>
            <div class="right-div">
                <div class="login-div">
                    <p class="para">Login as customer,</p>
                    <div style="display:<?php echo $display;?>" class="error-div" id="error-div">
                        <p class="para3" id="para">
                        <?php    
                               if($error=='error')
                               {
                                echo "Inavlid login";
                               }
                        ?>  
                        </p>
                    </div>
                    <div class="form">
                        <form action="cuslogin1.php" method="POST" onsubmit="return validation()">
                            <div class="user1">
                                <span class="material-icons-outlined">
                                    person_outline
                                    </span>
                                    <input type="text" placeholder="Username" id="text" name="user">
                            </div>
                            <div class="lock">
                                <span class="material-icons-outlined">
                                    lock
                                    </span>
                                    <input type="password" placeholder="Password" id="pass" name="pass">
                            </div>
                            <button type="submit">Sign in</button>
                            <div class="button">
                                
                                <a href="../cussignup/cussignup.php?user=new">Don't have an account?<b>Register here</b></a>
                            </div>
                        </form>
                        
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
</body>
</html>