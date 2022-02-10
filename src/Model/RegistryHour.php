<?php


class RegistryHour {
    
    private $projectId;
    private $registryStartRecord;
    private $registryEndRecord;
    private $registryDate;
    
    function __construct($date, $registryStartRecord, $projectId) {
        $this->registryDate = $date;
        $this->registryStartRecord = $registryStartRecord;
        $this->projectId = $projectId;
    }



    public function insertRegistryHour() {

        require_once(dirname(__DIR__, 2)."\config\Connection_Database.php");

        $query = $pdo->prepare("INSERT INTO horarios (projeto_id, data_registro, registro_inicio) VALUES (:id, :registryDate, :registryStartRecord)");

        $query->execute(
            [
                'id' => $this->projectId,
                'registryDate' => $this->registryDate,
                'registryStartRecord' => $this->registryStartRecord
            ]
            );

        }
}



