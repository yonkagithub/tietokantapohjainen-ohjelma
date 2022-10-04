<?php
// Luodaan yhteys etäiseen mysql tietokantaan cleardb:tä hyödyntäen, jotta ohjelma on toiminnallinen Herokussa.
$server = "eu-cdbr-west-03.cleardb.net";
$username = "b580eeebcf14ac";
$password = "ee10f1f7";
$dbname = "heroku_2c2f227919345f2";

$con = mysqli_connect($server, $username, $password, $dbname);

// Tallenna nappulaa painettaessa koodi luo yhteyden tietokannassa olevaan käyttäjälistaan.
// Tekstikenttiin kirjoitettu nimi ja kuvaus lisätään tietokantaan.
if (isset($_POST['addEntry'])) {
    if (!empty($_POST['addName']) && !empty($_POST['addDesc'])) {
        $name = $_POST['addName'];
        $desc = $_POST['addDesc'];

        $query = "insert into kayttajatiedot(`Name`,`Description`) values('$name', '$desc')";

        $run = mysqli_query($con, $query);

        // Jos tallennus onnistuu saa käyttäjä tästä ruudulle viestin ja ohjelma ohjaa itsensä takaisi pääsivulle.
        // Muissa tapauksissa käyttäjä saa viestin joko epäonnistuneesta tallennuksesta tai syöttövirheestä.
        if ($run) {
            echo "Käyttäjä tallennettu";
            header("refresh:2; url=index.php");
        } else {
            echo "Käyttäjää ei tallennettu";
        }
    } else {
        echo "Täytä molemmat kentät";
        header("refresh:2; url=https://php-kayttajahaku.herokuapp.com/index.php");
    }
}
