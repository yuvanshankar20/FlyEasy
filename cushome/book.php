<!DOCTYPE html>
<html>
<head>
	<title>Booking</title>
	<meta charset="utf-8">
	<link rel="icon" href="../img/homeicon.png" type="image/x-icon">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Pacifico|Paytone+One" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<body>
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
                <div class="heading">
                    <h1 class="h1">FlyEasy</h1>
                    <h1 class="h2">Flight</h1>
                    <h1 class="h3">booking</h1>
                </div>
                <img src="../img/homeplane.png" alt="fruitsalid"class="img2">
            </div>
            <div class="right-div">
                <div class="login-div">
                    <p class="para">Book Your Ticket,</p>
                    <div class="form">
                    <form id="fsty" method="POST">
						<label for="name">Name: </label>
						<input type="text" name="name" placeholder="Name" id="text">
						<br>
						<label for="male">Male: </label>
						<input type="radio" name="gender" value="male" id="text">
						<br>
						<label for="female">Female: </label>
						<input type="radio" name="gender" value="female" id="text">
						<br>
						<label for="DOB">DOB: </label>
						<input type="date" name="dob" id="text">
						<br>
						<label for="mobno">Mobile No: </label>
						<input type="telno" name="mobno" id="phone">
						<br>
						<label for="email">Email: </label>
						<input type="email" name="email" id="text">
						<br>
						<label for="type">Class: </label>
						<select name="type" id="text">
							<option value="Economy">Economy</option>
							<option value="Business">Business</option>
						</select>
						<br>
						<input type="submit" name="submit" id="text">
					</form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
				error_reporting(0);
				$dbhost="localhost";
				$dbuser="root";
				$dbpass="";
				$db="flyeasy";
				$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db);
				if(!$conn)
				{
					echo "Connection was failed".mysqli_connect_error();
				}
				$tickno=rand(3500,4000);
				$tickno=mysqli_real_escape_string($conn,$tickno);
				$passid=rand(1,50);
				$passid=mysqli_real_escape_string($conn,$passid);
				$name=$_POST['name'];
				$name=mysqli_real_escape_string($conn,$name);
				$gender=$_POST['gender'];
				$gender=mysqli_real_escape_string($conn,$gender);
				$dob=$_POST['dob'];
				$dob=mysqli_real_escape_string($conn,$dob);
				$mobno=$_POST['mobno'];
				$mobno=mysqli_real_escape_string($conn,$mobno);
				$email=$_POST['email'];
				$email=mysqli_real_escape_string($conn,$email);
				$type=$_POST['type'];
				$type=mysqli_real_escape_string($conn,$type);
	  			
	  
				if($_POST['submit'])
				{
					$sql="Insert into passenger values('".$passid."','".$name."','".$gender."','".$dob."','".$mobno."','".$email."')";
					$sqltick="Insert into ticket values('".$tickno."','".$passid."','".$type."','1')";
					if(mysqli_query($conn,$sql))
					{
						if(mysqli_query($conn,$sqltick))
						{
							echo "<h1 style='margin-left:200px;color:green;'>Your Ticket Has Been Booked!!</h1>";
							echo "<br><h2 style='margin-left:200px;color:green;'>Passenger ID = ".$passid."</h2>";
							echo "<br><h2 style='margin-left:200px;color:green;'>Ticket Number = ".$tickno."</h2>";
							echo "<a href='cushome.php#menu1' style='margin-left:200px;color:green;'>Click Here To See Ticket</a>";
						}
						else
						{
							echo "Something Went Wrong";
						}
					}
					else
					{
						echo "Something Went Wrong";
					}
				}

?>