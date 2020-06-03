<?php
    require "database/Procedural.php"
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
    $sql = "SELECT username FROM users";//query
    $result = mysqli_query($conn, $sql);//exc
    
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "user name: " . $row["username"]."<br>";
        }
    } else {
        echo "0 results";
    }
    if(isset($_POST['btnSubmit'])){
        $userName = $_POST['txtUserName'];
        $pwd = $_POST['txtPassword'];
        $sql1 = "INSERT INTO users (username,password) VALUES ('$userName','$pwd')";
        echo $sql1;
        if(mysqli_query($conn,$sql1)){
            echo "success<br>";
        }else{
            echo "fails<br>";
        }
    }
    mysqli_close($conn);
    ?>
    <form action="" method="post">
        <input type="text" name="txtUserName" placeholder="user" id="">
        <input type="password" name="txtPassword" placeholder="password" id="">
        <input type="submit" name="btnSubmit"  id="">
    </form>

</body>
</html>