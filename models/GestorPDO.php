<?php

class GestorPDO extends Conenection {
    public function __construct() {
        parent::__construct();
    }

    public function listar() {
        $consulta="SELECT * FROM flotaProblemas";
        $rtdo=$this->conn->query($consulta);
        $arrayProblemas=[];
        while ($value= $rtdo->fetch(PDO::FETCH_ASSOC)) {
            $value (['tipoProblema']=="informatico";){
                $problema = new informatico($value['id'], $value['tipo'], $value[''], $value['matricula']);
            }

        }
    }
}



















?>