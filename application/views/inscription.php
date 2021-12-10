<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url(); ?>/style/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url(); ?>/style/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Créez un compte!</h1>
                            </div>
                            <?php echo validation_errors(); ?>
                    <?php echo form_open('inscription'); ?>
                           
                            <form>
                    <div class="form-group">
                    <label for="exampleFormControlInput1">Nom</label>
                    <input type="input" name="nom" class="form-control" id="exampleFormControlInput1" >
                    </div>

                    <div class="form-group">
                    <label for="exampleFormControlInput1">Prenom</label>
                    <input type="input" name="prenom" class="form-control" id="exampleFormControlInput1" >
                    </div>
                    <div class="form-group">
                    <label for="exampleFormControlInput1">Email</label>
                    <input type="input" name="email" class="form-control" id="exampleFormControlInput1" >
                    </div>

                    <div class="form-group">
                    <label for="exampleFormControlInput1">Adresse</label>
                    <input type="input" name="adresse" class="form-control" id="exampleFormControlInput1" >
                    </div>

                    <div class="form-group">
                    <label for="exampleFormControlInput1">Telephone</label>
                    <input type="input" name="tele" class="form-control" id="exampleFormControlInput1" >
                    </div>

                    <div class="form-group">
                    <label for="exampleFormControlInput1">Statut</label>
                    <select class="form-control"  name="statut" id="sel1">
                    <option>Majeur</option>
                    <option>Mineur</option>
                    </select>
                    </div>                   
            
                    <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                     </div>

                     <div class="form-group">
                    <label for="exampleFormControlInput1">Identifiant</label>
                    <input type="input" name="pseudo" class="form-control" id="exampleFormControlInput1" >
                    </div>

                    <div class="form-group">
                    <label for="exampleFormControlInput1">Mot de passe</label>
                    <input type="password" name="mdp1" class="form-control" id="exampleFormControlInput1" >
                    </div>

                    <div class="form-group">
                    <label for="exampleFormControlInput1">Confirmez votre mot de passe</label>
                    <input type="password" name="mdp2" class="form-control" id="exampleFormControlInput1" >
                    </div>

                    <input type="submit" name="submit" value="Creer"/>
                    <a  href="<?php echo base_url();?>index.php/compte/creer"> <input type="button" value="Annuler"/> </a>
                </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.html">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>