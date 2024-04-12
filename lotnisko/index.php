<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php

$conn = mysqli_connect('localhost', 'root','','porty_lotnicze' ) or die ("Bład z połaczeniem");
mysqli_set_charset ($conn, "utf8");

$query = "SELECT DISTINCT (odloty.miasto) FROM odloty";
$result = mysqli_query($conn, $query);


echo "Podróżujemy do: "; 
echo '<ul>';
while($row = mysqli_fetch_row($result))
{
echo '<li>'.$row[0].'</li>';
}
echo '</ul>';
?>
</body>
</html>