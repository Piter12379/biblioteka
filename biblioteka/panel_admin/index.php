<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<link rel="stylesheet" type="text/css" href="../style.css" />
    <!--  ^^ link do stylów css które są z tamtąd zaciągane -->
		<title>Biblioteka</title>

	</head>
	<body>
	<div id="ramka">
	<div id="naglowek">Biblioteka  </div>
	<div id="kol1" class="kolumny">
		<?php

	include_once('login.php');

	?>
   <br />

		MENU<br />
    <?php
		include('menu_admin.php');
	?>

    </div>
	<div id="kol2" class="kolumny">
    <?php
if (!isset($_REQUEST['url'])) {
			$url='wyswietl';
	}
	else {
			$url=$_REQUEST['url'];
	}

	switch ($url) {

	case 'panel_admin':
		include('panel_admin.php');
		break;
	case 'regulamin':
		include('regulamin.php');
		break;


	case 'dodaj':
		include('dodaj.html');
		break;

	case 'zmien':
		include('zmien.php');
		break;

		case 'usun':
		include('usun.php');
		break;

		case 'dodano':
		include('dodano.php');
		break;

	case 'zmien_w_bazie':
		include('zmien_w_bazie.php');
		break;

	case 'usun_z_bazy':
		include('usun_z_bazy.php');
		break;

		case 'wyloguj':
		include('logout.php');
		break;

	default:
		include('wyswietl.php');
		break;

	}
    ?>



    </div>
	<div id="stopka">&copy; Paluchowski Piotr</div>
	</div>
	<body>

</html>
