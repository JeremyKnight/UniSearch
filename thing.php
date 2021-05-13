<html><head><title>Execute SQL</title></head>
<body>
<?php
//include('header.php');
     $SQL = $_REQUEST["stuff"];
    
    echo "Sql: '".$SQL."'";


    $connectionInfo = array("UID" => "jkPerson", "pwd" => "{your_password_here}", "Database" => "People", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
     $serverName = "tcp:unisearchdb.database.windows.net,1433";
     $conn = sqlsrv_connect($serverName, $connectionInfo);
     
     //$conn = mssql_connect("UniSearchPeople") or die("cannot connect :");
     //echo "connected";
    
    // //Choose the database to use
     //$db = mssql_select_db("library") or die("cannot open library: ".mssql_error());
    // echo "whats up";
     ?>
</body><html>