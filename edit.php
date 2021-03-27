<?php
    require_once "./dbConnect.php";
    $adminId = $_GET['GetID'];
    $sql = "SELECT * FROM admin WHERE adminId = '$adminId'";
    $result = mysqli_query($connection, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['adminId'];
        $name = $row['adminName'];
        $pw = $row['pw']; 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySQL</title>
    <style>
    body{
        background-color: white;
    }
    input{
        width: 40%;
        height: 5%;
        border: 1px;
        border-radius: 5px;
        padding: 8px 15px 8px 15px;
        margin: 10px 0px 15px 0px;
        box-shadow: 1px 1px 2px 1px green;
    }
    </style>
</head>
<body>
    <center>
        <h1>Update admin account</h1>
        <form action="update.php?ID=<?php echo $id ?>" method="POST">
        <input type="text" name="user" value = "<?php echo $name?>"><br>
        <input type="text" name="pw" value = "<?php echo $pw?>"><br>
        <input type="submit" value="Update" name="update">
        </form>
    </center>
</body>
</html>