<?php
  include("connect.php");
  $username=$_POST["username"];
  $password=$_POST["password"];

  $username = stripcslashes($username);
  $password = stripcslashes($password);
  $username = mysql_real_escape_string($username);
  $password = mysql_real_escape_string($password);

  mysql_connect("localhost", "root", "");
  mysql_select_db("login");
 
 $result = mysql_query("select * from admin where username = '$adminName' and password = '$adminPassword'")
        or die("failed to quety ".mysql_error());

  $row = mysql_fetch_array($result);
  if($row['username'] == $username && $row['password'] == $password){
    echo "login success";
  }
  else{
    echo "failed";
}
?>