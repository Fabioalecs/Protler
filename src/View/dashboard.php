<?php
session_start();
require_once(dirname(__DIR__)."\Controller\consult_projects.php");


?>

<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Protlerr</title>
</head>

<body>
    <div class="">
        <div class="card">
            <div class="container-fluid mt-n22 px-6 bg-roxo">
                <div class="row justify-content-md-center">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mb-2 mb-lg-0">
                                    <span class="mb-0 fw-bold user-text font-weight-bold"></span>
                                </div>
                                <div>
                                    <a href="/protler/src/View/createProject.php" class="btn btn-block btn-primary btn-lg mt-2"><small><i class="far fa-user pr-2"></i>Create New Project</small></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">

                        <div class="card rounded-3">

                            <div class="card-body">

                                <div class="row">
                                    <div class="col-3">
                                        <div class="line l-small"></div>
                                    </div>
                                    <div class="col-6">
                                        <span class="card-title">My Projects</span>
                                    </div>
                                    <div class="col-3">
                                        <div class="line r-small"></div>
                                    </div>
                                </div>

                                <div>
                                    <h4 class="fw-bold"><?php echo $activeProjects; ?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">

                        <div class="card rounded-3">

                            <div class="card-body">

                                <div class="row">
                                    <div class="col-3">
                                        <div class="line l-small"></div>
                                    </div>
                                    <div class="col-6">
                                        <span class="card-title">Worked Hours</span>
                                    </div>
                                    <div class="col-3">
                                        <div class="line r-small"></div>
                                    </div>
                                </div>

                                <div>
                                    <h4 class="fw-bold">132</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="">
                    <div class="col-md-12 col-12 mt-2">
                        <div class="card">

                            <div class="card-header bg-white py-4">
                                <span class="mb-0">My Projects</span>
                            </div>

                            <div class="row m-3">

                                <?php

                                include(dirname(__DIR__, 1) . "\Controller\card_render.php");

                                ?>

                            </div>
                        </div>

                        <div class="card-footer bg-white text-center mb-2">
                            <a href="../Controller/logout.php">Logout</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>