<html><head><title>Execute SQL</title></head>
<body>
<?php
//include('header.php');
     $SQL = $_REQUEST["stuff"];
    
    //echo "Sql: '".$SQL."'";


    $connectionInfo = array("UID" => "jkPerson", "pwd" => "{your_password_here}", "Database" => "People", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
     $serverName = "tcp:unisearchdb.database.windows.net,1433";
     $conn = sqlsrv_connect($serverName, $connectionInfo);
     
     //this didn't print out anything...
     echo "got here\n";
     if($SQL=="all") {
          echo "all from conditional";
          $query = "SELECT * FROM DBO.CUSTOMERS";
          //$result = mssql_query($query);
          $result=odbc_exec($conn, $query) or
               die("error executing query: ".odbc_error());

          for($i=0;$i<mssql_num_rows($result); ++$i) {
               $line = mssql_fetch_row($result);
               print("$line[0]-$line[1]\n");
          }
          echo $result;
     } else if($SQL=="two") {
          echo "two from conditional";
          $query = "SELECT * FROM BDO.CUSTOMERS WHERE NAME IN ('Orlando','Keith')";
          $result = mssql_query($query);
          for($i=0;$i<mssql_num_rows($result); ++$i) {
               $line = mssql_fetch_row($result);
               print("$line[0]-$line[1]\n");
          }
          echo $result;
     } else if($sql=="one") {
          echo "one from conditional";
          $query = "SELECT * FROM BDO.CUSTOMERS WHERE NAME IN ('Janet')";
          $result = mssql_query($query);
          for($i=0;$i<mssql_num_rows($result); ++$i) {
               $line = mssql_fetch_row($result);
               print("$line[0]-$line[1]\n");
          }
          echo $result;
     } else {
          echo "something is wrong";
     }

     

     //for all: SELECT * FROM DBO.CUSTOMERS
     //FOR 2: 
     //$conn = mssql_connect("UniSearchPeople") or die("cannot connect :");
     //echo "connected";
    
    // //Choose the database to use
     //$db = mssql_select_db("library") or die("cannot open library: ".mssql_error());
    // echo "whats up";
     ?>
</body><html>