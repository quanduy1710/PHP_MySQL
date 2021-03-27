<?php
    require_once "./dbConnect.php";
    if(isset($_GET['GetID']))
    {
        $id = $_GET['GetID'];
        $sql = "DELETE FROM admin WHERE adminId = '".$id."'";
        $result = mysqli_query($connection, $sql);
        if($result) 
        {
            header("Location:view.php");
        }else{
            echo "check your query";
        }
    }else{
        header('Location:view.php');
    }
?>