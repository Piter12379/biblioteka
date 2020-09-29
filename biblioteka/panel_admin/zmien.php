<?php
function tabelka()

{$conn=mysqli_connect(
'localhost',
'root',
'',
'biblioteka'
);

  $sql2="SELECT * FROM ksiazki INNER JOIN rodzaj ON ksiazki.id_rodzaj=rodzaj.id_rodzaj ORDER BY  id_ksiazki ASC;";
  $result2= $conn->query($sql2);

  if($result2 ->num_rows > 0){
  while($row = $result2->fetch_assoc()) {
  echo "<tr> <td> ".$row['id_ksiazki']."</td> <td>" .$row['tytul']." </td> <td> ".$row['autor']." </td> <td> ".$row['ilosc_kopi']." </td>  <td> ".$row['rodzaj']." </td> ";

  }

  } else {

   echo "Nie znaleziono rekordów";
  }
}

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style>
    .tabela{
      text-align: center;
margin-left: 11%;

    }
    table, th, td {
  border:1px  outset #c0c0c0;;
  border-collapse: collapse;

}
th, td {
  padding: 7px;
}
th {
  text-align: left;
}
.p{

}
.dane{
 height: 26px;
}
.first_data{
font-size: 14px;
font-weight: bold;
text-align: center;
}

.submit{
text-align: center;

}.heder{
 text-align:center;
 font-weight:bold;
 font-size:18px;
}
input{
}
    </style>
  </head>
  <body>
    <div>
    <div class="tabela">
    <table >
      <tr>
        <th>ID</th>
        <th>Tytuł</th>

        <th>Autor</th>

        <th>Ilość kopi </th>
        <th>Rodzaj </th>
      </tr>
      <tr>
        <?php
      echo tabelka();
?>

      </tr>

    </table>
</div>
    <div >
    <div class="heder">ZMIANA DANYCH W SYSTEMIE</div>
  <div class="first_data">  <form action="index.php?url=zmien_w_bazie" method="POST">
ID: <input type="text" size="20"  class="dane"  name="id_ksiazki" placeholder="Tutaj wpisz id..." required required pattern="[0-9\s]{2}">
 <p style="font-weight:lighter;color:#f50c0c;"><br>* id od 0 do 9 poprzedzamy spacją</p></div>


     <div class="first_data">Tytuł: <input type="text" size="45"  class="dane"  name="tytul" placeholder="Tutaj wpisz tytul..." required >
   &nbsp;&nbsp;  Autor: <input type="text" size="45"  class="dane" name="autor" placeholder="Tutaj wpisz autora..." required ></div>
   <div class="first_data">  Ilość kopii: <input type="text" size="38" class="dane"  name="ilosc_kopi" placeholder="Tutaj wpisz liczbe kopii..." pattern="[0-9]{2}" required >
   &nbsp;&nbsp;  Rodzaj: <input type="text" size="45" class="dane"  name="id_rodzaj" placeholder=" 1= Liryka, 2=Epika, 3=Dramat " pattern="[1-3]{1}" required  ></div>
   <div class="submit">  <input type="submit" style="height: 30px;width: 20%;font-size: 14px;font-weight: bold; "name="dodaj" value="ZMIEŃ REKORD"></div>
</div>
</div>
  </body>
</html>
