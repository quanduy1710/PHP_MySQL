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
        <h1>Register admin account</h1>
        <form action="insert.php" method="POST">
        <input type="text" name="user" placeholder="Name"><br>
        <input type="text" name="pw" placeholder="Password"><br>
        <input type="submit" value="Submit" name="submit">
        </form>
    </center>
</body>
</html>