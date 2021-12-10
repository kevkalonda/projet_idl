<body>
        <!-- Page Header-->

<img src="/images/logo.png" style=" height: 100px";>

                            <h2>Gestion des événements</h2>


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Administrateur<sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Tableau de bord</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Tableau de bord
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo base_url();?>index.php/evenement/ajouter" >
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Ajouter</span>
                </a>

            </li>



            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" >
                  <i class="fas fa-fw fa-cog"></i>
                    <span>Événements</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">

                </div>
            </li>

                 <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" >
                   <i class="fas fa-fw fa-cog"></i>
                    <span>Partage de fichiers</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">

                </div>
            </li>


            <li class="nav-item">
                <a class="nav-link collapsed" href="#" >
          <i class="fas fa-fw fa-cog"></i>
                    <span>Communication</span>
                </a>

            </li>

               <li class="nav-item">
                <a class="nav-link collapsed" href="#" >
                <i class="fas fa-fw fa-cog"></i>
                    <span>Groupe de travail</span>
                </a>

            </li>


             <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo base_url();?>index.php/compte/connecter" >
                <i class="fas fa-fw fa-cog"></i>
                    <span>Deconnexion</span>
                </a>

            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div>

        </ul>
        <!-- End of Sidebar -->






                <div class="col-lg-8 col-md-10 mx-auto">
                    <div style="text-align: center;  "><h3>Événements</h3></div>
<?php

if ($evenement != NULL) {?>
	<table class="table">
																																													  <tr>
																																								              <th>Organisé par </th>
																																													    <th>Titre de l'événement</th>
																																													    <th>Date de l'évenement</th>
																																													    <th>Date de début des inscriptions</th>
																																													    <th>Date de fin des inscriptions</th>
																																													    <th>Heure de l'événement</th>
																																				                      <th>Nombre place</th>

										                                                                                                                              			    <th>description</th>

																																										          <th>lieu</th>
											<th>Action</th>																																		  </tr>
	<?php
	foreach ($evenement as $evn) {
		echo "<tr>";
		echo "<td>".$evn["adh_nom"]." ".$evn["adh_prenom"]."</td>";
		echo "<td>".$evn["description_evn"]."</td>";
		echo "<td>".$evn["date_debut_evenement"]."</td>";
		echo "<td>".$evn["date_debut_inscription_evn"]."</td>";
		echo "<td>".$evn["date_fin_inscription_evn"]."</td>";
		echo "<td>".$evn["heure_debut_evenement"]."</td>";
		echo "<td>".$evn["nombre_place_evn"]."</td>";
		echo "<td>".$evn["detail_evn"]."</td>";
		echo "<td>".$evn["lieu_evn"]."</td>";
		?>
		<td><img src="/images/image.png" style=" height: 100px";></td>"
		<?php
		echo "/<tr>";
	}
	?>
	</table>
	<?php }?>















    </body>