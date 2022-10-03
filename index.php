<!DOCTYPE html>
<html>
    <head>
        <title>Käyttäjähaku</title>
    </head>

    <body>
        <form method="post">
            <label>Käyttäjähaku</label>
            <input type="text" name="search" />
            <input type="submit" name="submit" value=Haku />
        </form>
    </body>
</html>

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

<?php
// Luodaan yhteys etäiseen mysql tietokantaan cleardb:tä hyödyntäen, jotta ohjelma on toiminnallinen Herokussa.
$con = new PDO("mysql:host=eu-cdbr-west-03.cleardb.net;dbname=heroku_2c2f227919345f2", 'b580eeebcf14ac', 'ee10f1f7');
// Haku nappulaa painettaessa koodi luo yhteyden tietokannassa olevaan käyttäjälistaan ja etsii tekstikenttään kirjoitettua nimeä.
if (isset($_POST["submit"])) {
    $str = $_POST["search"];
    $sth = $con->prepare("SELECT * FROM `kayttajatiedot` WHERE Name = '$str'");

    $sth->setFetchMode(PDO::FETCH_OBJ);
    $sth->execute();
// Jos tietokannasta löytyy tekstikenttään kirjoitettu nimi, palauttaa sivu haetun käyttäjän nimen ja kuvauksen.
// Jos tietokannasta ei löydy tekstikenttään kirjoitettua nimeä, palauttaa sivu viestin "Hakemaasi käyttäjää ei löydy. (Koita esimerkiksi 'Matti Meikäläinen)".
    if ($row = $sth->fetch()) { ?>
		<br><br><br>
		<table>
			<tr>
				<th>Nimi</th>
				<th>Kuvaus</th>
			</tr>
			<tr>
				<td><?php echo $row->Name; ?></td>
				<td><?php echo $row->Description; ?></td>
			</tr>

		</table>
<?php } else {echo "Hakemaasi käyttäjää ei löydy. (Koita esimerkiksi 'Jaska Jokunen tai Lisa Simpson)";}
}

?>
