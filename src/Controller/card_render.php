<?php
    
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
            <p class="">16:20 hrs</p>
        </small>
    </button>

    <div class="modal fade" id="card-modal-<?php echo $project->id ?>" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4><?php echo $project->nome ?></h4>
                    <a class="close" data-dismiss="modal" href="#">&times;</a>
                </div>

                <div class="modal-body">

                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>

    </div>



<?php

endforeach;

?>