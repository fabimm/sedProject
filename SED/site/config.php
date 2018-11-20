<?php
   define('DB_SERVER', 'localhost:3306');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', 'root');
   define('DB_DATABASE', 'sed');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   if ($db->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//    $hostname = 'localhost:3306';
//    $username = 'root';
//    $password = 'root';
//    $database = 'sed';

//    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
//    $db=pg_connect("host=$hostname dbname=$database user=$username password=$password");
?>