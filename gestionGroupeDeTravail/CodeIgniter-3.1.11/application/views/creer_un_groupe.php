<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<style>
p {
  color: #26b72b;
}
</style>
<html>
<head>
  <title>Ma première page avec du style</title>
</head>

<body style="background: blue; color: white">

<!-- Menu de navigation du site -->
<ul style="background-color: white;">
  <li style="background-color: white;"><a href="#">Creer un groupe</a>
  <li style="color: white;"><a href="<?php echo base_url()?>">Liste de groupe</a>
  <li style="color: white;"><a href="<?php echo base_url()?>accueil/afficherMonGroupe">Mon groupe</a>
  <!--li style="color: white;"><a href="<?php echo base_url()?>index.php/accueil/installerDokuwiki">Doku install</a-->
</ul>

<!-- Contenu principal -->
<div style="text-align:center; align-content: center;">
<h1>Creer un groupe</h1>

<p style="color: white;">Bienvenue dans assocnuminfo! 

<?php echo validation_errors(); ?>

<?php echo form_open('creer_un_groupe'); ?>
  <form>
  <label for="id">Identifiant</label>
  <input type="input" name="id" /><br />
  
  <label for="pseudo">Nom du groupe</label> : <input type="text" name="mdp" />
  <select name="nombre" >
      <option value=0>--Nombre de participant--</option>
      <option value=20>20</option>
      <option value=50>50</option>
      <option value=60>60</option>
      <option value=80>80</option>
      <option value=100>100</option>
      <option value=200>200</option>
  </select></p>
<input style="background-color: red; color: white;padding: 10px; size: 15;border: 10;" type="submit" name="submit" value="Créer un compte" />
</form>
<?php echo form_close(); ?>
</div>
</body>
</html>