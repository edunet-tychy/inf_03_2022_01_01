<?php

$con = mysqli_connect('localhost', 'root', '', 'baza');

if($con){
    $date = $_GET["date"];
    $quantity = $_GET["quantity"];
    $telephone = $_GET["telephone"];
    $agreement = isset($_GET['agreement'])? 1 : 0;

    $sql = "INSERT INTO baza.rezerwacje (id, nr_stolika, data_rez, liczba_osob, telefon) VALUES (NULL, NULL, '$date', $quantity, '$telephone')";
    if(mysqli_query($con, $sql)){
        $info="Dodano rezerwację do bazy";
    } else {
        $info="Nie dodano rezerwacji do bazy";
    }

    mysqli_close($con);
} else {
    $info="Nie połączono z baza danych";
    
}

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restauracja Wszystkie Smaki</title>
    <link rel="stylesheet" href="./styl_1.css" />
</head>
<body>
    <div class="container">
        <header class="header">
            <h2><?=$info?></h2>
        </header>
    </div>
</body>
</html>