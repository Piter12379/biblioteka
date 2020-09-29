<head>
  <style>
  #time{
      font-size: 32px;
      font-weight: bold;
      font-family: Arial;
  }
  </style>
  <script>
function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('time').innerHTML =
  h + ":" + m + ":" + s;
  var t = setTimeout(startTime, 500);
}
function checkTime(i) {
  if (i < 10) {i = "0" + i};
  return i;
}
</script>
</head>
<body onload="startTime()">
<?php

?><ul>

<li><a href='index.php?url=wyswietl'>Strona główna</a></li>
<li style="display:none"><a href='index.php?url=dodano'>Dodano</a></li>

<li style="display:none"><a href='index.php?url=zmien_w_bazie'>zmien_w_bazie</a></li>
<li style="display:none"><a href='index.php?url=usun_z_bazy'>zmien_w_bazie</a></li>

<?php


if (!empty($_SESSION['imie'])) {
  echo '<li><a href="index.php?url=dodaj">Dodaj rekord</a></li>';
  echo '<li><a href="index.php?url=usun">Usuń rekord</a></li>';
  echo '<li><a href="index.php?url=zmien">Zmien rekord</a></li>';

  echo '<li><a href="index.php?url=wyloguj">Wyloguj</a></li>';
} else {
  echo " ";
}



?><br >
<li  id="time"></li>
</ul>


</body>
