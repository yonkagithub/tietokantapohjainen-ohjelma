<?php
// Luodaan yhteys etäiseen mysql tietokantaan cleardb:tä hyödyntäen, jotta ohjelma on toiminnallinen Herokussa.
$server = "eu-cdbr-west-03.cleardb.net";
$username = "b580eeebcf14ac";
$password = "ee10f1f7";
$dbname = "heroku_2c2f227919345f2";


$con = mysqli_connect($server, $username, $password, $dbname);

mysqli_select_db($con, 'heroku_2c2f227919345f2');

// Ohjelma vastaa "https://php-kayttajahaku.herokuapp.com/edit.php" sivulla tehtyyn muokkaus ja tallennus pyyntöön.
// Käyttäjän muokkaamat tiedot tallennetaan tietokantaan, ruudulle tulee viesti onnistuneesta tietojen päivityksestä ja ohjelma palaa takaisin pääsivulle.
// Jos tallennus ei onnistu ruudulle ilmestyy "Päivitys epäonnistui" teksti.
$sql = "UPDATE kayttajatiedot SET Name='$_POST[name]',Description='$_POST[desc]' WHERE ID=$_POST[id]";

if (mysqli_query($con, $sql)) {
    echo "Tiedot päivitetty";
    header("refresh:2; url=https://php-kayttajahaku.herokuapp.com/index.php");
} else
    echo "Päivitys epäonnistui";
