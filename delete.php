<?php
require_once('db.php');
    if(isset($_POST['delete'])){
        $id=$_POST['id'];
        $delete="DELETE FROM `concert` WHERE id='$id'";
        $result=mysqli_query($con,$delete);
        if($result){
            header('location:admin.php');
        }else{
            echo "Törlés sikertelen";
        }
    }
?>