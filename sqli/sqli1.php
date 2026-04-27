<!-- Kreiraj bazu podataka pod nazivom programeri, 
 i preko upita iz php skripte kreiraj 2 tabele backend i frontend
 u kojoj se nalaze podaci zaposlenih -->

<?php
    $host = "localhost";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($host, $username, $password);

    if (!$conn) {
        die("Database error: " . mysqli_connect_error());
    }

    $sql_baza = "CREATE DATABASE IF NOT EXISTS programeri";
    mysqli_query($conn, $sql_baza);

    mysqli_select_db($conn, "programeri");

    $sql_frontend = "CREATE TABLE IF NOT EXISTS frontend(
        id INT AUTO_INCREMENT PRIMARY KEY,
        ime VARCHAR(50),
        prezime VARCHAR(50),
        godine INT,
        plata DECIMAL(10,2)
    )";

    mysqli_query($conn, $sql_frontend);

    $sql_backend = "CREATE TABLE IF NOT EXISTS backend(
        id INT AUTO_INCREMENT PRIMARY KEY,
        ime VARCHAR(50),
        prezime VARCHAR(50),
        godine INT,
        plata DECIMAL(10,2)
    )";

    mysqli_query($conn, $sql_backend);

    mysqli_query($conn, "INSERT INTO frontend (ime,prezime,godine,plata)
        VALUES('Milan','Petrovic',28,3000.0),
        ('Jelena','Markovic',25,8000.0),
        ('Ana','Nikolic',30,2000.0)
    ");

    mysqli_query($conn, "INSERT INTO backend (ime,prezime,godine,plata)
        VALUES('Milan','Petrovic',28,3000.0),
        ('Jelena','Markovic',25,8000.0),
        ('Ana','Nikolic',30,2000.0)
    ");
?>
