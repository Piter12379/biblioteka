<?php
//require("connect.php");

session_start();
//$sql="INSERT INTO pracownicy(id_prac, imie, nazwisko, login, haslo) VALUES ('','$imie','$nazwisko','$login','$haslo');";
//$result= $conn->query($sql);
if((isset($_POST['imie'])) && (isset($_POST['nazwisko'])) && (isset($_POST['login'])) && (isset($_POST['haslo']))) {

$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$login = $_POST['login'];
$haslo = $_POST['haslo'];

$connection=mysqli_connect(
'localhost',
'root',
'',
'biblioteka'
);
   /*$connection = @mysqli_connect('localhost', 'root', '')
   or die('Brak połączenia z serwerem MySQL');
   $db = @mysqli_select_db('biblioteka', $connection)
   or die('Nie mogę połączyć się z bazą danych'); */

   // dodajemy rekord do bazy
   //$ins = @mysqli_query("INSERT INTO pracownicy values('', $imie, $nazwisko, $login, $haslo)");

   //if($ins) echo "Rekord został dodany poprawnie";
   //else echo "Błąd nie udało się dodać nowego rekordu";

   $sql2="INSERT INTO pracownicy (id_prac, imie, nazwisko,login,haslo)
VALUES ('','$imie','$nazwisko','$login','$haslo');";
   $result2= $connection->query($sql2);

   if($result2) echo "Rekord został dodany poprawnie";
   else echo "Błąd nie udało się dodać nowego rekordu";

   mysqli_close($connection);
}
?>
<form method="POST">
<fieldset class="log">



 <b>login:</b>
 <input class="logowanie" type="text" name="login" value="<?php if (isset($_POST['login'])) echo $_POST['login']; ?>" />
 <b>hasło:</b>
 <input class="logowanie"  type="password" name="haslo" />
 <b>Imie:</b>
 <input class="logowanie"  type="text" name="imie" />
 <b>Nazwisko:</b>
 <input class="logowanie"  type="text" name="nazwisko" />

<input type="submit" name="Zarejestruj" value="ZAREJESTRUJ" />
 </fieldset>
</form>
Aby się zalogować trzeba wpisać do adresu /panel_admin
Przykładowo w adresie www.domena.pl/biblioteka/index.php?url=Dodaj Pracownika
zamieniamy na www.domena.pl/biblioteka/panel_admin
