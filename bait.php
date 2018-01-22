<?php
require 'header.php';
require 'db.php'
 ?>


 <label>Choisissez le système d'exploitation que vous souhaitez installer :</label><br/>
 <select name="os" id="os">
 <?php
   $reponse = $pdo->query('SELECT os FROM os_guests');

   while ($donnees = $reponse->fetch())
   {
  ?>
     <option> <?php echo $donnees->os; ?> </option>

 <?php
 }
 $reponse->closeCursor();
 ?>
 </select>

 <?php echo "salut"; ?>

<?php require 'footer.php'; ?>
