<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>BISIKOMASH - Inscription</title>

    <!-- Fonts -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">

    <!-- SB Admin CSS -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #4e73df, #224abe);
        }

        /* Carte arrondie */
        .card {
            border-radius: 15px;
            overflow: hidden;
        }

        /* Image à gauche */
        .register-image {
            background: url("img/login.png") center center;
            background-size: cover;
            background-repeat: no-repeat;
            min-height: 100%;

            border-top-left-radius: 15px;
            border-bottom-left-radius: 15px;
        }
    </style>

</head>

<body>

    <div class="container">

        <div class="card shadow-lg my-5 border-0">
            <div class="card-body p-0">

                <div class="row">

                    <!-- IMAGE GAUCHE -->
                    <div class="col-lg-5 d-none d-lg-block register-image"></div>

                    <!-- FORMULAIRE DROITE -->
                    <div class="col-lg-7">
                        <div class="p-5">

                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">
                                    Créer un compte
                                </h1>
                            </div>

                            <form>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text"
                                            class="form-control form-control-user"
                                            placeholder="Nom">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text"
                                            class="form-control form-control-user"
                                            placeholder="Postnom">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="email"
                                        class="form-control form-control-user"
                                        placeholder="Adresse e-mail">
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password"
                                            class="form-control form-control-user"
                                            placeholder="Mot de passe">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password"
                                            class="form-control form-control-user"
                                            placeholder="Confirmer mot de passe">
                                    </div>
                                </div>

                                <a href="login.html"
                                    class="btn btn-primary btn-user btn-block">
                                    Créer le compte
                                </a>

                                <hr>

                                <a href="#"
                                    class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i>
                                    S'inscrire avec Google
                                </a>

                                <a href="#"
                                    class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i>
                                    S'inscrire avec Facebook
                                </a>

                            </form>

                            <hr>

                            <div class="text-center">
                                <a class="small" href="#">
                                    Mot de passe oublié ?
                                </a>
                            </div>

                            <div class="text-center">
                                <a class="small" href="index.php">
                                    Déjà un compte ? Connexion !
                                </a>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>

    <!-- Scripts -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>