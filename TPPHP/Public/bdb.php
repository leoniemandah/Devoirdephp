<?php

/**
 * On récupère une instance de PDO
 *
 * @return PDO
 */
function getPdo(): PDO
{
  try {
    
    $pdo = new PDO(
      "mysql:host=localhost;dbname=tpphp",
      "tpphp",
      "CwvKTbG8Vm8rvqhk");
    return $pdo;
  } catch(PDOException $ex) {
    
    exit("Erreur lors de la connexion à la base de données");
  }
}