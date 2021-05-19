<html><head><title>Execute SQL</title></head>
<body>
<?php
//include('header.php');
     $SQL = $_REQUEST["stuff"];
    
    //echo "Sql: '".$SQL."'";


    $connectionInfo = array("UID" => "jkPerson", "pwd" => "serverPassword!", "Database" => "People", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
     $serverName = "tcp:unisearchdb.database.windows.net,1433";
     $conn = sqlsrv_connect($serverName, $connectionInfo)
          or die( print_r( sqlsrv_errors(), true));
     
     //this didn't print out anything...
     echo "got here\n";
     if($SQL=="all") {
          echo " all from conditional ";
          $query = "SELECT * FROM DBO.CUSTOMERS";
          //$result = mssql_query($query);
          //$result=array(1, "some data");
          $stmt=sqlsrv_query($conn, $query);
          if( $stmt === false ) {
               echo " error from all query \n";
               die( print_r( sqlsrv_errors(), true));
          }
          
          // while($row = sqlsrv_fetch($stmt, SQLSRV_FETCH_NUMERIC) {
          //      echo $row[0].", ".$row[1]."<br/>";
          // }
          
          // print_r();
          // for($i=0;$i<mssql_num_rows($result); ++$i) {
          //      $line = mssql_fetch_row($result);
          //      print("$line[0]-$line[1]\n");
          // }

          echo $stmt;
     } else if($SQL=="two") {
          echo "two from conditional";
          $query = "SELECT * FROM DBO.CUSTOMERS WHERE NAME IN ('Orlando','Keith')";
          $result=array(1, "some data");
          $stmt=sqlsrv_query($conn, $query, $results);
          if( $stmt === false ) {
               echo " error from two query \n";
               die( print_r( sqlsrv_errors(), true));
          }
          
          while($row = sqlsrv_fetch($stmt)) {
               echo $row[0].", ".$row[1]."<br/>";
          }
          // for($i=0;$i<mssql_num_rows($result); ++$i) {
          //      $line = mssql_fetch_row($result);
          //      print("$line[0]-$line[1]\n");
          // }

          echo $stmt;
     } else if($sql=="one") {
          echo "one from conditional";
          $query = "SELECT * FROM DBO.CUSTOMERS WHERE NAME IN ('Janet')";
          $result=array(1, "some data");
          $stmt=sqlsrv_query($conn, $query, $results);
          if( $stmt === false ) {
               echo " error from one query \n";
               die( print_r( sqlsrv_errors(), true));
          }
          
          // while($row = sqlsrv_fetch($stmt, SQLSRV_FETCH_NUMERIC) {
          //      echo $row[0].", ".$row[1]."<br/>";
          // }
          // for($i=0;$i<mssql_num_rows($result); ++$i) {
          //      $line = mssql_fetch_row($result);
          //      print("$line[0]-$line[1]\n");
          // }

          echo $stmt;
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