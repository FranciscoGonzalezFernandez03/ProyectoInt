<?php
class ergonomicos extends Problemas {
    private $zonaCuerpo;

    public function __construct($id=0, $tipo, $titulo, $descripcion, $prioridad, $fecha) {
        parent::__construct($id, $tipo, $titulo, $descripcion, $prioridad, $fecha);
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
    public function setZonaCuerpo($zonaCuerpo): self
    {
        $this->zonaCuerpo = $zonaCuerpo;

        return $this;
    }
}