<?php
$database = mysqli_connect("localhost","root","","test");

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

function hapus($id){
  global $database;
  mysqli_query($database, "DELETE FROM tblogin WHERE id = $id");
  return mysqli_affected_rows($database);
}
function ubah($data){
  global $database; 
  $id = $data["id"];
  $username = htmlspecialchars($data["username"]);
  $password = htmlspecialchars($data["password"]);

  $query = "UPDATE tblogin SET
              username = '$username',
              password = '$password'
            WHERE id = $id
            ";
    mysqli_query($database,$query);
    return mysqli_affected_rows($database);
}
?>