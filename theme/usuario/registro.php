<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ClickBeard</title>

    <!-- Custom fonts for this template-->
    <link href="<?= url("/theme/assets/sb_admin/vendor/fontawesome-free/css/all.min.css") ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= url("/theme/assets/sb_admin/css/sb-admin-2.min.css") ?>" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-5 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Registre-se</h1>
                                    </div>
                                    <?php if (isset($error)) { ?>
                                        <div class="alert alert-danger" role="alert">
                                            <?= $error; ?>
                                        </div>
                                    <?php } ?>

                                    <?php if (isset($success)) { ?>
                                        <div class="alert alert-success" role="alert">
                                            <?= $success; ?>
                                        </div>
                                    <?php } ?>

                                    <form action="<?= $router->route("usuario.cadastrar"); ?>" method="post" enctype="multipart/form-data">
                                        <div class="user">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" id="nome" name="nome" placeholder="Informe seu nome">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Informe seu email">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control form-control-user" id="senha" name="senha" placeholder="Senha">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control form-control-user" id="confirm_senha" name="confirm_senha" placeholder="Confirmação Senha">
                                            </div>
                                            <div>
                                                <button class="btn btn-primary btn-user btn-block">Registrar</button>
                                            </div>
                                            <div class="text-center">
                                                <a class="small" href="<?= url("/") ?>">Logar</a>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= url("/theme/assets/sb_admin/vendor/jquery/jquery.min.js") ?>"></script>
    <script src="<?= url("/theme/assets/sb_admin/vendor/bootstrap/js/bootstrap.bundle.min.js") ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= url("/theme/assets/sb_admin/vendor/jquery-easing/jquery.easing.min.js") ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= url("/theme/assets/sb_admin/js/sb-admin-2.min.js") ?>"></script>

</body>

</html>