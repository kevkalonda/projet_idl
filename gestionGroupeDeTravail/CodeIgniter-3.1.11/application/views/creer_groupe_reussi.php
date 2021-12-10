<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
  <title>Ma première page avec du style</title>
</head>

<body style="background-color: blue">
 
<div style="background-color: white;">
  <!-- Menu de navigation du site -->
  <ul type="button">
    <li><a href="<?php echo base_url()?>index.php/creer_un_groupe">Creer un groupe</a>
    <li><a href="#">Liste de groupe</a>
    <li><a href="<?php echo base_url()?>index.php/accueil/afficherMonGroupe">Mon groupe</a>
  </ul>
</div>
 <div style="text-align:center; align-content: center;color: white;">
  <!-- Contenu principal -->
  <h1>Creer a un groupe</h1>

  <p>Votre groupe a été crée
  <p><a href="<?php echo base_url()?>index.php/accueil/afficherMonGroupe">
      <input style="background-color: red; color: white;padding: 10px; size: 15;border: 10;" type="button" value="Acceder au  groupe"></input></a></p>
</div>
</body>
</html>