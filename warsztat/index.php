<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodaj klienta</title>
</head>
<body>
  
<form action="dodaj_klienta.php" method="post">
Imię: <input type="text" name='imie'><br>
Nazwisko: <input type="text" name='nazwisko'><br>
Adres: <input type="text" name='adres'><br>
Numer telefonu: <input type="text" name='numer_telefonu'><br>
Email: <input type="text" name='email'><br>



<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $adres = $_POST['adres'];
    $numer_telefonu = $_POST['numer_telefonu'];
    $email = $_POST['email'];
    
    $conn = mysqli_connect('localhost', 'root', '', 'warsztat') or die('Błąd');
    mysqli_set_charset($conn, "utf8");
    
    $query = "INSERT INTO Klienci (Imię, Nazwisko, Adres, Numer_telefonu, Email) 
              VALUES ('$imie', '$nazwisko', '$adres', '$numer_telefonu', '$email')";

if (mysqli_query($conn, $query)) {
    echo "Klient został dodany pomyślnie.";
} else {
    echo "Błąd: " . $query . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
?>

<input type="reset" value="Reset">
<input type="submit" value="Dodaj klienta">

</form>
</body>
</html>
