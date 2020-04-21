<?php
    require "database/PDO.php";
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
        $query = "SELECT username FROM users";
        $data = $pdo->query($query);
        foreach($data as $row){
            echo "user name: ".$row['username']."<br>";
        }
        if(isset($_POST['btnSubmit'])){
            $userName = $_POST['txtUserName'];
            $pwd = $_POST['txtPassword'];
            $sql1 = "INSERT INTO users (username,password) VALUES ('".$userName."',$pwd)";
            if($pdo->exec($sql1)){
                echo "success<br>";
            }else{
                echo "fails";
            }
        }
        
    ?>
    <form action="" method="post">
        <input type="text" name="txtUserName" placeholder="user" id="">
        <input type="password" name="txtPassword" placeholder="password" id="">
        <input type="submit" name="btnSubmit"  id="">
    </form>
</body>
</html>