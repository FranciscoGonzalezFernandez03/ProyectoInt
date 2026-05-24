<?php
class informatico extends Problemas {
    private $equipoAfectado;

    public function __construct($id=0, $tipo, $titulo, $descripcion, $prioridad, $fecha) {
        parent::__construct($id, $tipo, $titulo, $descripcion, $prioridad, $fecha);
    }


    /**
     * Get the value of equipoAfectado
     */
    public function getEquipoAfectado()
    {
        return $this->equipoAfectado;
    }

    /**
     * Set the value of equipoAfectado
     */
    public function setEquipoAfectado($equipoAfectado): self
    {
        $this->equipoAfectado = $equipoAfectado;

        return $this;
    }
}