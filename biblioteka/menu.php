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


<ul>

<li><a href='index.php?url=glowna'>Strona główna</a></li>

<?php
#zamiast adresu strony np wyswietl.php można skożystać z czegoś takiego dzięki czemu w lunku nie pojawia się rozszeżenie pliuku
echo '<li><a href="index.php?url=wyswietl">Dostępne  książki</a></li>';
echo '<li><a href="index.php?url=regulamin">Regulamin</a></li>';
echo '<li><a href="index.php?url=Dodaj Pracownika">Dodaj Pracownika</a></li>';



?><br >

<li id="time"></li>

</ul>


</body>
