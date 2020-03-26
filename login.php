<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "test";

$conn= mysqli_connect ($dbhost, $dbuser,$dbpass,$dbname);

if(!$conn){

    die("no hay conexion:". mysqli_connect_error());
}

$nombre = $_POST["usr"];
$pass = $_POST["pass"];

$query = mysqli_query($conn,"SELECT * FROM login WHERE usuario = '".$nombre."' and password = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1){
    header("Location:app.HTML");
    
    


}else if($nr == 0){
    header("Location:index.html");
    
}


?>