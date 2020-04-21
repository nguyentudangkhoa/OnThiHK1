<?php
    require'database/OOP.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST['btnSubmit'])){
        $userName = $_POST['txtUserName'];
        $pwd = $_POST['txtPassword'];
        $sql1 = "INSERT INTO users (username,password) VALUES ('".$userName."',".$pwd.")";
        echo $sql1;
        if($conn->query($sql1)){
            echo "success<br>";
        }else{
            echo "fails<br>";
        }
    }
        $sql = "SELECT username FROM users";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "username: " . $row["username"]. "<br>";
            }
        } else {
            echo "0 results";
        }
    ?>
    <form action="" method="post">
        <input type="text" name="txtUserName" placeholder="user" id="">
        <input type="password" name="txtPassword" placeholder="password" id="">
        <input type="submit" name="btnSubmit"  id="">
    </form>
</body>
</html>