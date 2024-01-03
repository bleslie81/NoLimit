<?php
require_once('db.php');
if(isset($_POST['insert'])){
    if(empty($_POST['date']) || empty($_POST['hol']) || empty($_POST['time'])){
        echo "Töltsd ki az összes mezőt!";
    }
    else
    {
        $date=$_POST['date'];
        $hol=$_POST['hol'];
        $time=$_POST['time'];
        $query="INSERT INTO `concert` (`mikor`, `hol`, `hour`) VALUE ('$date','$hol','$time')";
            $result=mysqli_query($con,$query);
        if($result){
            header('location:admin.php');
        }
        else{
            echo "Nem sikerült a koncert felvitele!".mysqli_error($con);
        }
    }
}
$con->close();
?>