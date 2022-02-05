<?php
    
    require_once(dirname(__DIR__, 1)."\Controller\dest.php");
    $data = consultProjects();

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
                                    <h4 class="fw-bold"><?php echo count($data); ?></h4>
                                    <p class="mb-0"><span class="text-dark me-2">2</span> Completed</p>
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
                                    <p class="mb-0"><span class="text-dark me-2">28</span> Hours</p>
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
                                
                                    foreach($data as $key => $project):

                                ?>
                                
                                <div class="col-3 btn-primary m-3 p-1">
                                                <div>
                                                    <a href="#" class="btn btn-block btn-lg m-2">
                                                        <div>
                                                            <span class=""><?php echo $project->nome ?></span>
                                                        </div>
                                                        <small><span class="">Criado: <?php echo $project->data_de_criacao ?></span></small>
                                                        <small><p class="">16:20 hrs</p></small>
                                                    </a>
                                                </div>
                                </div>                           
                                <?php
                                
                                    endforeach;

                                ?>
                                
                                
                                


                            </div>
                        </div>

                        <div class="card-footer bg-white text-center mb-2">
                            <a href="#">View All Projects</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
