<!DOCTYPE html>
<html>
    <head>
        <title>Käyttäjätietokanta</title>
    </head>
    <h3>Lisää käyttäjä</h3>
    <body>
        <form action="insert.php" method="post">
            <label>Nimi-----</label>
            <input type="text" name="addName" />
            <br />
            <label>Kuvaus--</label>
            <input type="text" name="addDesc" />
            <button type="submit" name="addEntry">Tallenna</button>
        </form>
    </body>
    <br />
    <h3>Hae käyttäjää</h3>
    <body>
        <form action="search.php" method="post">
            <input type="text" name="search" />
            <input type="submit" name="submitsearch" value="Haku" />
        </form>
    </body>
    <br />
    <br />
    <button onCLick="location.href='https://php-kayttajahaku.herokuapp.com/edit.php'" type="button">Muokkaa</button>
    <button onCLick="location.href='https://php-kayttajahaku.herokuapp.com/delete.php'" type="button">Poista</button>
</html>
