<html>

<head>
    <title>Muokkaa Käyttäjää</title>
</head>
<button onCLick="location.href='https://php-kayttajahaku.herokuapp.com/index.php'" type="button"> Etusivu</button>

</html>

<?php

// Luodaan yhteys etäiseen mysql tietokantaan cleardb:tä hyödyntäen, jotta ohjelma on toiminnallinen Herokussa.
$server = "eu-cdbr-west-03.cleardb.net";
$username = "b580eeebcf14ac";
$password = "ee10f1f7";
$dbname = "heroku_2c2f227919345f2";

$con = mysqli_connect($server, $username, $password, $dbname);

mysqli_select_db($con, 'heroku_2c2f227919345f2');

// Ohjelma etsii tietokannasta käyttäjälistan ja näyttää nimet ruudulla.
// Ohjelma antaa muokata yhtä nimeä ja kuvausta, jonka jälkeen käyttäjä voi tallentaa muutoksensa.
// Tallenus nappia painettaessa ohjelma päivittää tiedot "update.php" sisällä olevan koodin avulla.
$sql = "SELECT * FROM kayttajatiedot";

$records = mysqli_query($con, $sql);
?>
<table>
    <tr>
        <th>Nimi</th>
        <th>Kuvaus</th>
    </tr>
    <?php while ($row = mysqli_fetch_array($records)) {
        echo "<tr><form action=update.php method=post>";
        echo "<td><input type=text name=name value=" . $row['Name'] . "></td>";
        echo "<td><input type=text name=desc value=" . $row['Description'] . "></td>";
        echo "<input type=hidden name=id value='" . $row['id'] . "'>";
        echo "<td><input type=submit value=Tallenna>";
        echo "</form></tr>";
    }

    ?>