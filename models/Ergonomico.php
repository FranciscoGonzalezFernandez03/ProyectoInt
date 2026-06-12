<?php
class ergonomico extends Problemas {
    private $zonaCuerpo;

    public function __construct($tipo, $titulo, $descripcion, $prioridad, $fecha, $zonaCuerpo , $id=0) {
        parent::__construct($id, $tipo, $titulo, $descripcion, $prioridad, $fecha);
        $this->zonaCuerpo = $zonaCuerpo;
    }


    /**
     * Get the value of zonaCuerpo
     */
    public function getZonaCuerpo()
    {
        return $this->zonaCuerpo;
    }

    /**
     * Set the value of zonaCuerpo
     */
    public function setZonaCuerpo($zonaCuerpo)
    {
        $this->zonaCuerpo = $zonaCuerpo;

        return $this;
    }
}