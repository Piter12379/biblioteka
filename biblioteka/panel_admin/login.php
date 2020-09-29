<?php

 session_start();
 if (isset($_SESSION['nazwisko'])) {
 					echo 'Jesteś zalogowany jako: <b>'.$_SESSION['imie'].' '.$_SESSION['nazwisko'].'</b>';
 							} else {

 #formularza logowania
 if (isset($_POST['zaloguj'])) {

 #wczytuje plik obsługujący połaczenie z baza danych
 $conn=mysqli_connect(
 'localhost',
 'root',
 '',
 'biblioteka'
 );

 #tworze pustą informację
 $informacja = NULL;


 #sprawdzamy czy wprowadzono login
 if (empty($_POST['login'])) {
 	$login=FALSE;
 	$informacja .= 'Zapomniałeś podać nazwy użytkownika<br /> ';
 } else {
 	$login=$_POST['login'];
 }

 #sprawdzamy czy wprowadzono hasło
 if (empty($_POST['haslo'])) {
 	$haslo=FALSE;
 	$informacja .= 'Nie wprowadziłeś hasła <br />';
 } else {
 	$haslo=($_POST['haslo']);
 }

 if ($login && $haslo) {


 	$zapy="SELECT * FROM `pracownicy` WHERE login='$login' and haslo='$haslo'";

 	#wykonuje zapytanie
 	$wynik=mysqli_query($conn,$zapy);

 	#oczekuje zwrotu rekordu
 	$row=mysqli_fetch_array($wynik);

 		if ($row) {


 			session_start();
 			$_SESSION['nazwisko']=$row['2'];
 			$_SESSION['imie']= $row['1'];
 			$_SESSION['id_osoby']=$row['0'];
 			$_SESSION['haslo']= $row['4'];
header('Location: http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/index.php?url=glowna');
 			exit;

 		} else {
 			$informacja='Dane, które wprowadziłeś nie zgadzaja się <a href="index.php?url=glowna">Spróbuj jeszcze raz</a>';
 		}

 	#zamykam połączenie z bazą danych

 } else {
 	$informacja.='<a href="index.php?url=glowna">Spróbuj jeszcze raz</a>';
 }

 if (isset($informacja)) {
 	echo $informacja;
 }


 } else {
 ?>
 <form action="index.php?url=glowna" method="POST">
 <fieldset class="log">



 	<b>login:</b>
 	<input class="logowanie" type="text" name="login" value="<?php if (isset($_POST['login'])) echo $_POST['login']; ?>" />
 	<b>hasło:</b>
 	<input class="logowanie"  type="password" name="haslo" />


 <input type="submit" name="zaloguj" value="ZALOGUJ" />
 	</fieldset>
 </form>

 <?php

 	}
 	}
 ?>
