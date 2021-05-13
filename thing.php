<html><head><title>Execute SQL</title></head>
<body>
<?php
//include('header.php');
    $SQL = $_REQUEST["stuff"];
    
    echo "Sql: '".$SQL."'";

    $conn = mssql_connect("UniSearchPeople") or die("cannot connect :");

    $conn = mssql_connect("cs1") or die("cannot connect :".mssql_error());
    
    //Choose the database to use
    $db = mssql_select_db("library") or die("cannot open library: ".mssql_error());
    />
</body><html>