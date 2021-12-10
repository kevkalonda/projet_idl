<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
  <title>Ma première page avec du style</title>
</head>

<body>

<!-- Menu de navigation du site -->
<ul class="navbar">
  <li><a href="#">Creer un groupe</a>
  <li><a href="index.php/acceder_un_groupe.php">Liste de groupe</a>
  <li><a href="<?php echo base_url()?>accueil/afficherMonGroupe">Mon groupe</a>
</ul>

<!-- Contenu principal -->
<h1>Creer un groupe</h1>

<p>Bienvenue dans assocnuminfo! 

<h3>Remplissez le formulaire</h3> 

<form method="post" action="">
   <p><label for="pseudo">Nom du groupe</label> : <input type="text" name="pseudo" id="pseudo" /></p>
   <p><label for="pseudo">Nombre de personnes : </label>
   <select name="pets" id="pet-select">
      <option value="">--Nombre de participant--</option>
      <option value="20">20</option>
      <option value="50">50</option>
      <option value="60">60</option>
      <option value="80">80</option>
      <option value="100">100</option>
      <option value="200">200</option>
  </select></p>
  <input type="button" value="Creer un groupe"/>
</form>

<!-- Signer et dater la page, c'est une question de politesse! >
<address>Fait le 5 avril 2004<br>
  par moi.</address-->

</body>
</html>