<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cushome2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="icon" href="../img/homeicon.png" type="image/x-icon">
    <title>FlyEasy</title>
</head>
<body>
<?php
    $tablename = "devrev";
    $search = false;
    $mysqli = new mysqli('localhost', 'root', '', 'flyeasy') or die(mysqli_error($mysqli));
    if(isset($_POST['searching'])) {
        $search = true;
        $sname = $_POST['name'];
    }
?>
    <div class="container">
    <div class="navigation">
        <img style="width: 35px;height: 35px;" src="../img/homeicon.png" alt="logo" type="image/x-icon">
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
               <div class="search">
                    <form action="" method="post">
                    
                            <input type="text" placeholder="Search.." id="search" name="name">
                        <button type="submit" name="searching">
                            <span class="material-icons-outlined">
                                search
                                </span>
                        </button>
                    </form>
               </div>
            </div>
            <div class="sub-div">
            <div class="right-div">
            <?php
                $tablename="Devrev";
                $mysqli=new mysqli('localhost','root','','flyeasy')or die(mysqli_error($mysqli));
                    $result=$mysqli->query("SELECT * FROM $tablename")or die($mysqli->error);
                while($row=$result->fetch_assoc()):?>
                <div class="orange" style="height:370px;width:230px;">
                    <img src="../img/add.png" class="fruit" alt="fruit">
                    <h1 class="name"><?php echo strtoupper($row['proname']);?></h1>
                    <p class="price">From: <?php echo $row['from'];?></p>
                    <p class="weight">To: <?php echo $row['to'];?></p>
                   <h2 class="rate" style="font-size :15px;">Departure :<?php echo $row['departure'];?></h2>
                   <button style="height: 2.3rem;width: 6.525rem;margin-left: 50px;margin-top:4.9px;border-radius: 10px;border: none;background-color: var(--dark-green);cursor: pointer;align-items: center;">
                   <a style="font-weight: 600;font-size: 0.95rem;text-decoration: none;color: var(--white);" href="book.php">Book</a>      
                   </button>           
                </div>
                <?php endwhile;?>
                <?php
                    function pre_r($array)
                    {
                        echo'<pre>';
                        print_r($array);
                        echo '</pre>';
                    }
                ?>      
        </div>       
    </div>
</body>
</html>