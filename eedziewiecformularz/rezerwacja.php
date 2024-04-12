<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$conn=mysqli_connect('localhost','root','','porty_lotnicze') or die('Błąd');
mysqli_set_charset($conn,"utf8");
$query="SELECT odloty.id, odloty.miasto, odloty.data FROM odloty;";
$result=mysqli_query($conn, $query);
?>


<?php
if(isset($_POST['imie'])&& isset($_POST['nazwisko'])&& isset($_POST['miastoz']))
{
    $conn=mysqli_connect('localhost','root','','porty_lotnicze') or die ("błąd");
    mysqli_set_charset($conn,"utf8");
    $imie=$_POST['imie'];
    $nazwisko=$_POST['nazwisko'];
    $miastoz=$_POST['miastoz'];
    $kierunek=$_POST['kierunek'];
    $query="SELECT odloty.id, odloty.miasto,odloty.data FROM odloty";
    $query2="INSERT klienci VALUES('','$imie','$nazwisko','$miastoz',$kierunek)";

    $result=mysqli_query($conn,$query2);
    echo $imie." ".$nazwisko." został dodany";
}
else{
    echo 'wprowadz poprawne dane';
}
mysqli_close($conn);
?>
<br>
<a href="index.php"> Wróć do menu </a>
</body>
</html>