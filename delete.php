<html>

<title>Poista Käyttäjä</title>

<body>
    <button onCLick="location.href='https://php-kayttajahaku.herokuapp.com/index.php'" type="button"> Etusivu</button>
    <br>
    <br>
    <tr>
        <table border=1 cellpadding=1 cellspacing=1>
            <th>Nimi</th>
            <th>Kuvaus</th>
            <?php

            // Luodaan yhteys etäiseen mysql tietokantaan cleardb:tä hyödyntäen, jotta ohjelma on toiminnallinen Herokussa.
            $server = "eu-cdbr-west-03.cleardb.net";
            $username = "b580eeebcf14ac";
            $password = "ee10f1f7";
            $dbname = "heroku_2c2f227919345f2";

            $con = mysqli_connect($server, $username, $password, $dbname);

            mysqli_select_db($con, 'heroku_2c2f227919345f2');

            // Ohjelma etsii tietokannasta käyttäjälistan ja näyttää nimet ruudulla.
            // Painamalla poisto nappulaa, samalla rivillä oleva nimi ja kuvaus poistetaan tietokannasta yhdistämällä "deleteconfirmation.php" sisällä olevan koodin avulla.
            $sql = "SELECT * FROM kayttajatiedot";

            $records = mysqli_query($con, $sql);

            while ($row = mysqli_fetch_array($records)) {
                echo "<tr>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['Description'] . "</td>";
                echo "<td><a href=deleteconfirmation.php?id=" . $row['id'] . ">Delete</a></td>";
            }
            ?>
        </table>
    </tr>
</body>

</html>