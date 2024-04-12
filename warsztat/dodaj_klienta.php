<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodaj klienta</title>
</head>
<body>

<?php
$conn = mysqli_connect('localhost', 'root', '', 'warsztat') or die('Błąd');
mysqli_set_charset($conn, "utf8");
?>


<?php
if(isset($_POST['imie']) && isset($_POST['nazwisko']) && isset($_POST['adres']) && isset($_POST['numer_telefonu']) && isset($_POST['email']))
{
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $adres = $_POST['adres'];
    $numer_telefonu = $_POST['numer_telefonu'];
    $email = $_POST['email'];

    $query = "INSERT INTO Klienci (Imię, Nazwisko, Adres, Numer_telefonu, Email) 
              VALUES ('$imie', '$nazwisko', '$adres', '$numer_telefonu', '$email')";

    if(mysqli_query($conn, $query)) {
        echo $imie." ".$nazwisko." został dodany";
    } else {
        echo "Błąd: " . $query . "<br>" . mysqli_error($conn);
    }
}
else {
    echo 'Wprowadź poprawne dane';
}
mysqli_close($conn);
?>
<br>
<a href="index.php"> Wróć do menu </a>
</body>
</html>
