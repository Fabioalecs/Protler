<?php

$actuallyUser = $_SESSION['email'];    

require_once(dirname(__DIR__)."\Controller\consult_projects.php");
$data = consultProjects();



foreach ($data as $key => $project) :

?>

    


        <button class="col-3 btn-primary m-3 p-1" data-toggle="modal" data-target="#card-modal-<?php echo $project->id ?>">
            <div>
                <span class=""><?php echo $project->nome ?></span>
            </div>
            <small><span class="">Criado: <?php echo $project->data_de_criacao ?></span></small>
            <small>
                <p class="">16:20 Worked Hours</p>
            </small>
        </button>

        <div class="modal fade" id="card-modal-<?php echo $project->id ?>" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class=""><?php echo $project->nome ?></h1>
                        <a class="close" data-dismiss="modal" href="#">&times;</a>
                    </div>

                    <div class="modal-body">
                        <p class="text-center">Created at: <?php echo $project->data_de_criacao ?> </p>
                    </div>
                    <form class="modal-footer" action="../Controller/registry_hour.php" method="post">
                        <input type="hidden" name="projectInput" value="<?php echo $project->id?>">
                        <button type="submit" name="start" class="btn-primary">Start</button>
                        <button type="submit" name="end" class="btn-primary">End</button>
                        <a href="#">Working Hours Report</a>
                    </form>
                </div>
            </div>

        </div>

<?php

endforeach;

?>