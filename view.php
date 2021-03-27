<?php
    require_once "./dbConnect.php";
    $sql = "SELECT * FROM admin";
    $result = mysqli_query($connection, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View admin</title>
    <style>
    body{
        background-color: white;
    }
    table, th, td {
        border: 1px solid black;
    }

    table {
        width: 100%;
    }
    </style>
</head>
<body>
    <center>
        <h1>View admin account</h1>
        <table>
            <tr>
                <td>ID</td>
                <td>Admin name</td>
                <td>Password</td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>
        <?php
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['adminId'];
                $name = $row['adminName'];
                $pw = $row['pw']; 
        ?>
        <tr>
                <td><?php echo $id ?></td>;
                <td><?php echo $name ?></td>;
                <td><?php echo $pw ?></td>;
                <td><a href="edit.php?GetID=<?php echo $id ?>">Edit</a></td>
                <td><a href="delete.php?GetID=<?php echo $id ?>">Delete</a></td>
        </tr>
        <?php
            }
        ?>
        </table>      
    </center>
</body>
</html>