
<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName="phpoop";
try {
    $dns = "mysql:host=$serverName;dbname=$dbName";
    // set the PDO error mode to exception
    $pdo = new PDO($dns, $userName, $password);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    echo "connect success";
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
?>