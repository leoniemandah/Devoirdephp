<?php
$title = "Acceuil";
require_once 'layout/entete.php';
?>

<main>
  <ul class="list-group">
  
  <li class="list-group-item list-group-item-primary">PEUGEOT</li>
  <li class="list-group-item list-group-item-secondary">RENAULT</li>
  <li class="list-group-item list-group-item-success">AUDI</li>
  <li class="list-group-item list-group-item-danger">OPEL</li>
  <li class="list-group-item list-group-item-warning">BMW</li>
  <li class="list-group-item list-group-item-info">NISSAN</li> 
</ul>
  </main>
  
     <form method="POST" action=""> 
     Rechercher un mot : <input type="text" name="recherche">
     <input type="SUBMIT" value="Search!"> 
     </form>
     </html>

     <?php
//connexion à la base de donnée
     $pdo = new PDO(
      "mysql:host=localhost;dbname=tpphp",
      "tpphp",
      "CwvKTbG8Vm8rvqhk"
    );
    // Ouvre une connexion au serveur MySQL
    $conn = mysqli_connect($pdo);


     // Récupère la recherche
     $recherche = isset($_POST['recherche']) ? $_POST['recherche'] : '';

     // la requete mysql
     $q = $conn->query(
     "SELECT champ1, champ2 FROM votretable
      WHERE champ1 LIKE '%$recherche%'
      OR champ2 LIKE '%$recherche%'
      LIMIT 10");

     // affichage du résultat
     while( $r = mysqli_fetch_array($q)){
     echo 'Résultat de la recherche: '.$r['champ1'].', '.$r['champ2'].' <br />'
;
     }

     require_once 'layout/footer.php';
?>


</body>