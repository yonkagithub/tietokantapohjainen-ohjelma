<?php
// Luodaan yhteys etäiseen mysql tietokantaan cleardb:tä hyödyntäen, jotta ohjelma on toiminnallinen Herokussa.
$server = "eu-cdbr-west-03.cleardb.net";
$username = "b580eeebcf14ac";
$password = "ee10f1f7";
$dbname = "heroku_2c2f227919345f2";

$con = mysqli_connect($server, $username, $password, $dbname);

mysqli_select_db($con, 'heroku_2c2f227919345f2');

// Ohjelma poistaa valitun nimen, antaa viestin onnistuneesta poistosta ja ohjautuu takaisi pääsivulle.
$sql = "DELETE FROM kayttajatiedot WHERE ID='$_GET[id]'";

if (mysqli_query($con, $sql)) {
    echo "Käyttäjä poistettu";
}
header("refresh:2; url=index.php");
