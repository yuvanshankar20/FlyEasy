<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="farlogin.css">
    <script src="farlog.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">
    <link rel="icon" href="../img/homeicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <title>FlyEasy Admin</title>
    
</head>
<body>
<div class="container">
        <div class="navigation">
            <img style="width:35px; height:35px" src="../img/homeicon.png" alt="logo" type="image/x-icon">
            <div class="nav-right">
                <div class="home">
                    <a href="home.html">
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
                <div  class="login-div">
                    <p class="para">Login as Admin,</p>
                    <div style="display:<?php echo $display;?>" class="error-div" id="error-div">
                        <p class="para3" id="para">
                               <?php    
                               if($error=='error')
                               {
                                echo "Inavlid login";
                               }
                        ?></p>
                    </div>
                    <div class="form">
                        <form method="POST" action="farmerlog.php">
                            <div class="user1">
                                <span class="material-icons-outlined">
                                    person_outline
                                    </span>
                                <input type="text" placeholder="Devrev" id="text" name="tableuser" >
                                
                            </div>
                            <div class="lock">
                                <span class="material-icons-outlined">
                                  lock
                                    </span>
                                <label>password : admin@123</label>
                                <input type="password" placeholder="Password" id="pass" name="pass">
                                <span class="material-icons-outlined" id="visibility-on" >
                                   visibility
                                      </span>
                                <span class="material-icons-outlined" id="visibility-off" >
                                        visibility_off
                                 </span>
                            </div>
                            
                            
                            <button type="submit" name="farsubmit">Sign in</button>
                            
                        </form>

                    </div>
                </div>  
            </div>
        </div>
    </div>
</body>
</html>