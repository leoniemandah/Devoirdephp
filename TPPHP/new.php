<?php
$title = "Enregistrement";
require_once 'layout/entete.php';
?>

<html>
<form method="POST" action="new.php">
<center>
<input type="text" name="nom" size="20" value="nom" maxlength="35"> 
<input type="text" name="annee_de_sortie" size="20" value="annee_de_sortie" maxlength="70"> <br>
<input type="text" name="nombre_de_kilometre" size="20" value="nombre_de_kilometre" maxlength="70"> <br>
<input type="submit" value="Envoyer" name="enregistrer">
</center>
</form>
</html>

<?php
// On commence par récupérer les champs
if(isset($_POST['nom']))      $nom=$_POST['nom'];
else      $nom="";

if(isset($_POST['annee_de_sortie']))      $AdS=$_POST['annee_de_sortie'];
else      $AdS="";

if(isset($_POST['nombre_de_kilometre']))      $NdK=$_POST['nombre_de_kilometre'];
else      $NdK="";



// On vérifie si les champs sont vides
if(empty($nom) OR empty($AdS) OR empty($NdK))
    {
    echo '<font color="red">Attention, Vous devez remplir tous les champs !</font>';
    }

// Aucun champ n'est vide, on peut enregistrer dans la table
else     
    {
       // connexion à la base
require_once 'public/bdb.php';
    // on écrit la requête sql
    $sql = "INSERT INTO voitures(nom, annee_sorie,nb_km) VALUES($nom','$AdS','$NdK')";
    $pdo = getPdo();
    $stmt = $pdo->prepare($query);
    } 

    require_once 'layout/footer.php';
?> 