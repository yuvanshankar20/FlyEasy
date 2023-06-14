<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="icon" href="../img/homeicon.png" type="image/x-icon">
    <title>Add Flight</title>
    <link rel="stylesheet" href="addproduct1.css">
</head>
<body>
<?php
//  $tablename=$_GET['tname'];
//  $fname=$_GET['fname'];
 if(isset($_POST['save']))
 {
     $textname1=$_POST['proname'];
     $textname=strtolower($textname1);
     $textpass=$_POST['place'];
     $textloc1=$_POST['landing'];
     $textloc=strtolower($textloc1);
     $textphone=$_POST['dep'];
     if(!empty($texrtuser)|| !empty($textpass) || !empty($textloc) || !empty($textphone))
     {
         $host="localhost";
         $username="root";
         $password="";
         $dbname="flyeasy";
         $con=new mysqli($host,$username,$password,$dbname);
         if (mysqli_connect_error())
         {
             die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
           }
         else
         {
             $SELECT = "SELECT proname From devrev Where proname = ? Limit 1";
             $INSERT = "INSERT INTO devrev(proname,`from`,`to`,departure) VALUES(?,?,?,?)";
             $stmt = $con->prepare($SELECT);
             $stmt->bind_param("s", $textname);
             $stmt->execute();
             $stmt->bind_result($textname);
             $stmt->store_result();
             $rnum = $stmt->num_rows;
             if ($rnum==0) 
             {
                 $stmt->close();
                 $stmt = $con->prepare($INSERT);
                 $sql="CREATE TABLE `$textname`(passid INT,username VARCHAR(100),gender VARCHAR(10),dob DATE,mobile VARCHAR(10),email VARCHAR(50),class VARCHAR(15),id INT NOT NULL AUTO_INCREMENT,PRIMARY KEY(id))";
                 $result=mysqli_query($con,$sql) or die("BAD CREATE:$sql");
                 $stmt->bind_param('sssi', $textname,$textpass,$textloc,$textphone);
                 $stmt->execute();
                 echo "New record inserted sucessfully";
                 header("Location:adminhome.php?error=none");
             }
             else 
             {
                 //Someone already register using this username
                 header("Location:summa.php?user=exist");
             }
             $stmt->close();
             $con->close();
         }
     }
     else 
     {
         echo "All field are required";
         die();
     }
 }
    if(isset($_POST['cancel'])){
        $taname=$_POST['taname'];
        header("Location:adminhome.php?tname=$taname");
    }
?>
    <div class="form">
        <form action="adminhome.php" method="post">
        
                <div class="img">
                    <img src="add.png" alt="PROIMAGE">
                </div>
                <div class="imgbutton">
                <button type="submit" class="delete"><a href="addproduct.php?tname=<?php echo $tablename;?>&fname=upload/default/orange.png">DELETE</a></button>
                </div>
            <div class="prodetails">
                <input type="text"class="input" placeholder="Flight name" name="proname">
                <input type="text" class="input" placeholder="From" name="place">
                <input type="text" class="input" placeholder="To" name="landing">
                <input type="text" class="input" placeholder="Departue" name="dep">
                <div class="button">
                    <button class="cancel"type="submit" name="cancel">Cancel</button>  
                    <button class="save"type="submit" name="save">save</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>