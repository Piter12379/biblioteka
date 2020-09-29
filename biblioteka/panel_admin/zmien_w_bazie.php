<?php
require("../connect.php");

$id_ksiazki=$_POST['id_ksiazki'];
$tytul=$_POST['tytul'];
$autor=$_POST['autor'];
$ilosc_kopi=$_POST['ilosc_kopi'];
$id_rodzaj=$_POST['id_rodzaj'];
$sql="UPDATE ksiazki SET tytul='$tytul',autor='$autor',ilosc_kopi='$ilosc_kopi',id_rodzaj='$id_rodzaj' WHERE id_ksiazki='$id_ksiazki'";

 $result= $conn->query($sql);
?>
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
  echo "<tr> <td> ".$row['tytul']." </td> <td> ".$row['autor']." </td> <td> ".$row['ilosc_kopi']." </td>  <td> ".$row['rodzaj']." </td> ";
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
    </style>
  </head>
  <body>
    <table  >
      <tr>
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
  </body>
</html>
