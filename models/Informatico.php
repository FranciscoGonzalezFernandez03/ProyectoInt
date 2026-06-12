<?php
class informatico extends Problemas {
    private $equipoAfectado;

    public function __construct($tipo, $titulo, $descripcion, $prioridad, $fecha, $equipoAfectado , $id=0) {
        parent::__construct($id, $tipo, $titulo, $descripcion, $prioridad, $fecha);
        $this->equipoAfectado = $equipoAfectado;
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
    public function setEquipoAfectado($equipoAfectado)
    {
        $this->equipoAfectado = $equipoAfectado;

        return $this;
    }
}