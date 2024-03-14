<?php

$host = "localhost";
$port = "5432";
$dbname = "gaming_club_db";
$user = "postgres";
$password = "Sangareba1@";

$conn = pg_connect("host=$host port=$port dbname=$dbname password=$password");


if (!$conn) {
    echo "Erreur de connexion à la base de données.\n";
    exit;
}


$query = "SELECT * FROM user";
$result = pg_query($conn, $query);

if (!$result) {
    echo "Erreur lors de l'exécution de la requête.\n";
    exit;
}


while ($row = pg_fetch_assoc($result)) {
    echo "Email: " . $row['email'] . ", Password: " . $row['password'] . "\n";
}


pg_close($conn);
?>