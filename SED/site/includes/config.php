<?php

   $hostname = 'localhost';
   $port = '5432';
   $username = 'postgres';
   $password = '809C3E35';
   $database = 'sed';
   $db=pg_connect("host=$hostname port=$port dbname=$database user=$username password=$password") ;
   $stat = pg_connection_status($db);
   if ($stat === PGSQL_CONNECTION_OK) {
    //    echo 'Connection status ok';
   } else {
       echo 'Connection status bad';
   }
?>