<?php
    require_once "./dbConnect.php";
    if(isset($_POST['submit'])){
        if(empty($_POST['user']) || empty($_POST['pw'])){
            echo "Please do not let these field empty";
        }else{
            $name = $_POST['user'];
            $pw = $_POST['pw'];
            $sql = "INSERT INTO admin(adminName, pw) VALUES ('$name','$pw')";
            $result = mysqli_query($connection, $sql);

            if($result){
                header("Location:view.php");
            }else{
                echo "Faile to inser";
            }
        }
    }else{
        header('Location:index.php');
    }
?>