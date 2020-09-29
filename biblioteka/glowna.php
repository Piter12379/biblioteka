<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
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
      if (i < 10) {i = "0" + i};  // dodaje zero przed liczbami  < 10
      return i;
    }
    </script>
  </head>
  <body onload="startTime()">
<div>
<div id="alert">

   Zapraszamy do naszej Biblioteki Publicznej Miasta i Gminy im. Bonawentury Graszyńskiego znajdującej się na ul.Poznańska 16. <br>
  Z dniem 11.06.2020 będzie możliwe ponownie odwiedzanie oraz kozystanie z biblioteki i dzieł które zawiera.<br>
  <img src="images/old_books.jpg" alt="" style=" text-align: center;width: 30%;padding: 0 10px;">
</div>
  <div id="text_1">
<img src="images/librarian_1.png" alt="" style="float: right;width: 20%;padding: 0 10px;">,,Książki to prawdziwa magia, która pozwala nam po siebie sięgnąć gdy tylko chcemy i mamy na to ochotę. " to słowa naszego bibliotekarza Pana Andrzeja Kurpińskiego który co rusz zaprasza młodych ludzi jak i starszych to odwiedzania i biblioteki ja k i wypożyczania książek. ,, Uwielbiam książki odkąd pamiętam, Jeszce gdy byłem dzieckiem mama czytała mi Piotrusia Pana. Już wtedy poznałem magie książki, która drzemie w wyobraźni. A przecież to właśnie książki ją rozwijają. Dlatego zostałem bibliotekarzem, dzięki temu mam dostęp do skarbnicy tego wszystkiego, ale chętnie się tym dziele z ludźmi którzy mają odwagę odwiedzić naszą bibliotekę" - odpowiada spytany o powód zostanie bibliotekarzem Pan Andrzej.</div>


<div id="text_2">
  ,,Książki to skarbnica wiedzy, to dzięki nim znamy historie mity legendy czy baśnie. Gdyby nie one prawdopodobnie wiele z tych rzecz bezpowrotnie by przepadło."- odpowiada o książkach Joanna Kozioł. <br>
  ,,Jak zostałam bibliotekarką? W sumie to przez książki i rodzinę.<img src="images/librarian_2.jpg" alt="" style="float: left;width: 25%;padding: 10px 10px;"> Zawsze miałam ich dużo w wieku 18 lat musiałam przenieść część książek do osobnego pokoju, bo nie mieściły się już na pułkach. Wtedy mój tata powiedział mi że skoro mam tyle książek to powinnam zostać bibliotekarką. Bardzo spodobał mi się ten pomysł, teraz mam przynajmniej co czytać i minie sporo czasu zanim to wszystko przeczytam"- odpowiadała nam pani Joanna, która dodaje - ,, Zapraszam wszystkich moli książkowych do biblioteki, razem na pewno znajdziemy coś w waszym guście."</div>

    <div id="time"></div>   </div>
  </body>
</html>
