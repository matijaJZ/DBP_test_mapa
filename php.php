<?php

//podatci za konekciju o bazi
$dbhost = "bazaprvatestna.cr8t1xgjhw4n.eu-north-1.rds.amazonaws.com";
$dbuser = "admin";
$dbpass = "bazaprva";
$dbname = "Testna_baza";

//konekcija na bazu
if(! $con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)) 
{
    die("Failed to connect!");
}


if(isset($_POST['unesi'])){
    $ime = $_POST['ime'];
	$prezime = $_POST['prezime'];
    if(!empty($ime) && !empty($prezime)){
        //query za unos u bazu u tablicu korisnici
        $query = "INSERT INTO korisnici (ime,prezime) VALUES ('$ime','$prezime')";
        $result = mysqli_query($con, $query);
        //automatski vraća na login nakon pritiska na gumb submit
        header("Location: index.php");
        die;
    }
}
?>