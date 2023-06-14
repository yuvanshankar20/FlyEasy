<?php
    $mysqli=new mysqli('localhost','root','','flyeasy')or die(mysqli_error($mysqli));
    $id=0;
    $name=" ";
    $perkg=" ";
    $quantity=" ";
    $price=" ";
    if(isset($_GET['Delete']))
    {
        $taname=$_GET['tname'];
        $id=$_GET['Delete'];
        $mysqli->query("DELETE  FROM $taname WHERE id=$id") or die($mysqli->error());
        header("Location:adminhome.php?tname=$taname");
    }
    if(isset($_GET['edit']))
    {
        $taname=$_GET['tname'];
        $id=$_GET['edit'];
        $result=$mysqli->query("SELECT * FROM $taname WHERE id=$id")or die($mysqli->error());
        if(count(array($result))==1)
        {
            $row=$result->fetch_array();
            $name=$row['proname'];
            $from=$row['from'];
            $to=$row['to'];
            $departure=$row['departure'];
        }
    }
    if(isset($_POST['edit']))
    {
        $taname=$_GET['tname'];
        $id=$_GET['edit'];
        $name=$_POST['proname'];
        $from=$_POST['from'];
        $to=$_POST['to'];
        $departure=$_POST['departure'];
        $mysqli->query("UPDATE  $taname SET,proname='$name',from='from,to='to',departure='$departure' WHERE id=$id") or die($mysqli->error());
        header("Location:adminhome.php?tname=$taname");
    }
    
?>