<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="icon" href="img/homeicon.png" type="image/x-icon">
    <title>Admin</title>
</head>
<body>
<?php
    $tname='Devrev';
    $tablename="Devrev";
?>
<div class="container">
    <div class="navigation">
        <img style="width: 35px;height: 35px;" src="../img/homeicon.png" alt="logo" type="image/x-icon">
        <button type="submit" name="submit" class="button"><a href="ticket.php" >View Bookings</button>
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
            <div class="right-div">
            <?php
                $tablename="Devrev";
                $mysqli=new mysqli('localhost','root','','flyeasy')or die(mysqli_error($mysqli));
                    $result=$mysqli->query("SELECT * FROM $tablename")or die($mysqli->error);
                while($row=$result->fetch_assoc()):?>
                <div class="orange">
                    <img src="add.png" class="fruit" alt="fruit">
                    <a href="process.php?Delete=<?php echo $row['id']?>&tname=<?php echo $tablename;?>" class="delete">
                        <span class="material-icons-outlined">
                        close
                        </span>
                    </a>
                    <h1 class="name"><?php echo strtoupper($row['proname']);?></h1>
                    <p class="price">From: <?php echo $row['from'];?></p>
                    <p class="weight">To: <?php echo $row['to'];?></p>
                   <h2 class="rate" style="font-size :15px;">Departure :</br> <?php echo $row['departure'];?></h2>
                   
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
                <div class="add">
                <a name="add1" href="summa.php?tname=<?php echo $tablename;?>&fname=upload/default/orange.png">
                        <span class="material-icons-outlined">
                            add
                            </span>
                </a>
                        <p>Add Flight
                        </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>