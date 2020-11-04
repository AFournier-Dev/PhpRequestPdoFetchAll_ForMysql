<?php 
$dsn = 'mysql:dbname=exomysql;host=127.0.0.1'; // ou host=localhost;
$user = 'root';
$password = '';

/*
try {
    $dbh = new PDO($dsn, $user, $password);
    echo 'jusqu\'ici tout va bien';
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}
var_dump($dbh);

$stmt = $dbh->prepare("SELECT id ,country_code FROM mock_data WHERE country_code LIKE 'N%'");
var_dump($dbh);

$stmt->execute();
var_dump($stmt);
*/


/*
while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
    var_dump($result);
}
*/

/*
$result = $stmt->fetch(PDO::FETCH_ASSOC);
var_dump($result);
*/

try {
    $dbh = new PDO($dsn, $user, $password);
    echo 'jusqu\'ici tout va bien';
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}
var_dump($dbh);

$nBFemmes = $dbh->prepare("SELECT gender, COUNT(*) AS number FROM mock_data GROUP BY gender ORDER BY  number ASC");

$nBFemmes->execute();
var_dump($dbh);
var_dump($nBFemmes);
// SELECT state_code FROM mock_data WHERE state_code LIKE 'N%';

$resultF = $nBFemmes->fetchAll(PDO::FETCH_ASSOC);
var_dump($resultF);


// POUR LES HOMMES 
/*
$nbHommes = $dbh->prepare("SELECT gender, COUNT(*) AS number FROM mock_data GROUP BY gender ORDER BY number ASC");

$nbHommes->execute();
var_dump($dbh);
var_dump($nbHommes);
// SELECT state_code FROM mock_data WHERE state_code LIKE 'N%';

$resultH = $nbHommes->fetch(PDO::FETCH_ASSOC);
var_dump($resultH);

*/