<?php 
class Problemas {
    protected $id;
    protected $tipo;
    protected $titulo;
    protected $descripcion;
    protected $prioridad;
    protected $fecha;

    public function __construct($id, $tipo, $titulo, $descripcion, $prioridad, $fecha) {
        $this->id = $id;
        $this->tipo = $tipo;
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
        $this->prioridad = $prioridad;
        $this->fecha = $fecha;
    }

    public function getId() {
        return $this->id;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getPrioridad() {
        return $this->prioridad;
    }

    public function getFecha() {
        return $this->fecha;
    }
}