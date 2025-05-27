<?php 
session_start();
if (!isset($_SESSION['vie'])) {
    $_SESSION['vie'] = 100;
}
if (!isset($_SESSION['exp'])) {
    $_SESSION['exp'] = 0;
}
if (!isset($_SESSION['lvl'])) {
    $_SESSION['lvl'] = 1;
}
if (!isset($_SESSION['armor'])) {
    $_SESSION['armor'] = 0;
}
if (!isset($_SESSION['strength'])) {
    $_SESSION['strength'] = 1;
}
if (!isset($_SESSION['damage'])) {
    $_SESSION['damage'] = 1;
}
if (!isset($_SESSION['chapter'])) {
    $_SESSION['chapter'] = 1;
}
if (!isset($_SESSION['acte'])) {
    $_SESSION['acte'] = 1;
}
#redirection vers le bon chapitre/acte
$chapter = $_SESSION['chapter'];
$acte = $_SESSION['acte'];

// Exemple : redirige vers "chapitres/acte1-chapitre2.php"
$url = "chapitre_{$chapter}/acte_{$acte}.php";

// Redirection
header("Location: $url");
exit();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loading</title>
    <link rel="stylesheet" href="../css/loading.css">
</head>
<body>
    <h1>Chargement de votre personnage...</h1>
</body>
</html>