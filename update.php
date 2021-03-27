<?php
    require_once "./dbConnect.php";
    if(isset($_POST['update']))
    {
        $id = $_GET['ID'];
        $name = $_POST['user'];
        $pw = $_POST['pw'];
        $sql = "UPDATE admin SET adminName = '".$name."', pw = '".$pw."' WHERE adminId = '".$id."'";
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