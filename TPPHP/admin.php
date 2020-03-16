<?php
$title = "Administration";
require_once 'layout/entete.php';


//presentation par defaut de toutes les voitures			
if (isset( $_POST['envoie'])) {

if (isset( $_POST['value_1'])) echo $_POST['value_1'].'<br />';
if (isset( $_POST['value_2'])) echo $_POST['value_2'].'<br />';
if (isset( $_POST['value_3'])) echo $_POST['value_3'].'<br />';

// Contenu de la global P_POST
print_r($_POST);
 }
?>

<form action="admin.php" method="post">
<input type="checkbox" name="value_1" value="1" <?php if ( isset( $_POST[
'value_1'])) echo  'checked="checked"'; ?>>DACIA<br />
<input type="checkbox" name="value_2" value="2" <?php if ( isset( $_POST[
'value_2'])) echo  'checked="checked"'; ?>>MERCEDES-BENZ<br />
<input type="checkbox" name="value_3" value="3" <?php if ( isset( $_POST[
'value_3'])) echo  'checked="checked"'; ?>>TOYOTA<br />
<input type="submit" name="envoie" value="Mettre à jour">
</form>