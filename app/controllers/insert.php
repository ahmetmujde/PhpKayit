<?php

$inputName      = $_POST["ad"];

$inpurSurname   = $_POST["soyad"];

$inputSection   = $_POST["bolum"];

$inputNumber    = $_POST["number"];


$sql = "INSERT INTO ogrenci (Adi,Soyadi,Bolumu,Numarasi) VALUES ('$inputName','$inpurSurname','$inputSection',$inputNumber)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>