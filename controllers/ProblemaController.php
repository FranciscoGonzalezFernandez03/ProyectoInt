<?php

class ProblemaController {

    private $gestor;

    public function __construct($gestor) {
        $this->gestor = $gestor;
    }

    public function index() {
        $problemas = $this->gestor->listar();
        include "views/listar.php";
    }

    public function crear() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $tipo = $_POST['tipo'];
            $titulo = $_POST['titulo'];
            $descripcion = $_POST['descripcion'];
            $prioridad = $_POST['prioridad'];
            $fecha = $_POST['fecha'];
            
            if ($_POST['tipo'] == "informatico"){
                $equipoAfectado = $_POST['equipoAfectado']; 
                $problema = new informatico($tipo, $titulo, $descripcion, $prioridad, $fecha, $equipoAfectado);
            } else {
                $zonaCuerpo = $_POST['zonaCuerpo'];
                $problema = new ergonomico($tipo, $titulo, $descripcion, $prioridad, $fecha, $zonaCuerpo);
            }
            
            $this->gestor->agregar($problema);

            header("Location: index.php");
            exit;
        }

        include "views/crear.php";
    }

    public function editar() {
        $id = $_GET['id'] ?? null;
        $problema = ($this->gestor->buscar($id));
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $problema->setTitulo($_POST['titulo']);
            $problema->setDescripcion($_POST['descripcion']);
            $problema->setPrioridad($_POST['prioridad']);
            $problema->setFecha($_POST['fecha']);
            
            if ($problema instanceof informatico){
                $problema->setEquipoAfectado($_POST['equipoAfectado']);
            } else {
                $problema->setZonaCuerpo($_POST['zonaCuerpo']);
            }
            
            $this->gestor->actualizar($problema);
            header("Location: index.php");
            exit;
        }

        include "views/editar.php";
    }

    public function eliminar() {
        $id = $_GET['id'] ?? null;
        $this->gestor->eliminar($id);
        header("Location: index.php");
        exit;
    }
}
?>