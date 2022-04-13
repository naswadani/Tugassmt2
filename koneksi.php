<?php
$database = mysqli_connect("localhost","root","","submit");

function query($query){
    global $database;
    $result = mysqli_query($database, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
      $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
  global $database; 
  $username = htmlspecialchars($data["username"]);
  $password = htmlspecialchars($data["password"]);

  $query = "INSERT INTO tblogin
              VALUES
              ('','$username','$password')";
    mysqli_query($database,$query);
    return mysqli_affected_rows($database);
}

?>