<?php
    $servername = "127.0.0.1";
    $sys_user ="root";
    $sys_password = "";
    $database_name = "sql";
    $conn = mysqli_connect($servername,$sys_user,$sys_password,$database_name);
  if($conn)
    {
        echo "Connect OK";
    }else
        echo "Not connect";
?>