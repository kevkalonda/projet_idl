<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
  <title>Ma première page avec du style</title>
</head>

<body>

<!-- Menu de navigation du site -->
<div>
<ul class="navbar">
  <li><a href="<?php echo base_url()?>index.php/creer_un_groupe">Creer un groupe</a>
  <li><a href="<?php echo base_url()?>">Liste de groupe</a>
  <li><a href="#">Mon groupe</a>
</ul>
</div>
<div style="text-align:center; align-content: center;">
<!-- Contenu principal -->
<h1>Mon groupe</h1>
<p><a href="http://localhost/dokuwiki/doku.php?id=pages2"  target="_blank">Voir les propositions</a></p>

<!-- Signer et dater la page, c'est une question de politesse! >
<address>Fait le 5 avril 2004<br>
  par moi.</address-->
</div>
</body>
</html>