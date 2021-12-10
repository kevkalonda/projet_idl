<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
  <title>Ma première page avec du style</title>
</head>

<body style="background-color: blue">
<div style=" position: justify;">
<!-- Menu de navigation du site -->
<ul style="background-color: white;">
  <li style="color: white;"><a href="index.php/creer_un_groupe">Creer un groupe</a>
  <li style="color: white;"><a href="#">Liste de groupe</a>
  <li style="color: white;"><a href="<?php echo base_url()?>index.php/accueil/afficherMonGroupe">Mon groupe</a>
</ul>
</div>
<!-- Contenu principal -->
<div style="text-align:center; align-content: center; color: white;">
<h1>Acceder a un groupe</h1>

<p>Choissisez un groupe pour s'inscrire! 



<p><a href="<?php echo base_url()?>index.php/accueil/choix"><input style="background-color: red; color: white;padding: 10px; size: 15;border: 10;" type="button" value="Acceder au groupe1"/></a>
<p><a href="<?php echo base_url()?>index.php/accueil/choix1"><input style="background-color: red; color: white;padding: 10px; size: 15;border: 10;" type="button" value="Acceder au groupe2"/></a>
<p><a href="<?php echo base_url()?>index.php/accueil/choix2"><input style="background-color: red; color: white;padding: 10px; size: 15;border: 10;" type="button" value="Acceder au groupe3"/></a>
</div>

<!-- Signer et dater la page, c'est une question de politesse! >
<address>Fait le 5 avril 2004<br>
  par moi.</address-->

</body>
</html>