

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
<form action="rezerwacja.php" method="post">
Imie: <input type="text" name='imie'><br>
Nazwisko: <input type="text" name='nazwisko'><br>
miasto zamieszkania: <input type="text" name='miastoz'><br>
<?php
$conn=mysqli_connect('localhost','root','','porty_lotnicze') or die('Błąd');
mysqli_set_charset($conn,"utf8");

$query="SELECT odloty.id, odloty.miasto, odloty.data FROM odloty;";
$result=mysqli_query($conn, $query);
echo '<select name="kierunek">';
while($row=mysqli_fetch_row($result)){
    echo '<option value="'.$row[0].'">'.$row[1].", ".$row[2]. '</option>';
}
echo '</select>';
mysqli_close($conn);
?>
<input type="reset" value="reset">
<input type="submit" value="send">

</form>
</body>
</html>