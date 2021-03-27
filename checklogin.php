<?php
    require_once "./dbConnect.php";
    if(isset($_POST['submit'])){
        if(empty($_POST['user']) || empty($_POST['pw'])){
            echo "Please do not let these field empty";
        }else{
            $name = $_POST['user'];
            $pw = $_POST['pw'];
            $sql = "SELECT * FROM admin WHERE adminName = '$name' and pw = '$pw'";
            $result = $connection->query($sql);

            if($result->num_rows > 0) {
                header("Location:view.php");
            }else{
                echo "Failed to Login";
            }
        }
    }
?>