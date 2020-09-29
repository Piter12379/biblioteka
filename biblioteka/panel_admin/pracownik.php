<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<link rel="stylesheet" type="text/css" href="style.css" />
    <!--  ^^ link do stylów css które są z tamtąd zaciągane -->
		<title>Biblioteka</title>

	</head>
	<body>
	<div id="ramka">
	<div id="naglowek">Biblioteka </div>
	<div id="kol1" class="kolumny">

		MENU<br />
    <?php
		include('menu.php');
	?>

    </div>
	<div id="kol2" class="kolumny">
    <?php
if (!isset($_REQUEST['url'])) {
			$url='glowna';
	}
	else {
			$url=$_REQUEST['url'];
	}

	switch ($url) {

	case 'glowna':
		include('glowna.php');
		break;
	case 'regulamin':
		include('regulamin.php');
		break;

	case 'wyswietl':
		include('wyswietl.php');
		break;

	case 'dodaj':
		include('dodaj.php');
		break;

		case 'usun':
		include('usun.php');
		break;


	default:
		include('glowna.php');
		break;

	}
    ?>



    </div>
	<div id="stopka">&copy; Paluchowski Piotr</div>
	</div>
	<body>

</html>
