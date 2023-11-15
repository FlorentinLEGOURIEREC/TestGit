<?php 
//Récupérer les variables de connexion
 $dbname = '';
 $username = ''; 
 $password = ''; 
 
// Gestion de cas d'erreur 
try {
    $pdo = new PDO($dbname,$username, $password);
    
}
catch (PDOException $e) {
    die("Impossible de se connecter a la base de donnees :" . $e->getMessage()); 
} //Affichage d'un message en cas d'erreur

?>