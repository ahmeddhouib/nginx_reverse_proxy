<?php declare(strict_types=1);

    $redis = new Redis();
    $redis->connect('redis2', 6379);
    //    $redis->auth('REDIS_PASSWORD');
    if($redis){
        echo "Connect Redis2 Successfully\r\n";
    }


    $servername = "db2";
    $username = "root";
    $password = "admin@123";
    $dbname = "db";
    // $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Create connection
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }else
    echo "Connected MySQL2 Successfully.\r\n";
?>
