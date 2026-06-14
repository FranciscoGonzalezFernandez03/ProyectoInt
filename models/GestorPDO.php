<?php

class GestorPDO extends Connection {
    public function __construct() {
        parent::__construct();
    }


    public function listar() {
    $consulta = "SELECT * FROM flotaProblemas";
    $rtdo = $this->conn->query($consulta);
    $arrayProblemas = [];
    while ($value = $rtdo->fetch(PDO::FETCH_ASSOC)) {
        if ($value['tipo'] == "informatico") {
            // Se añade $value['equipoAfectado'] al final
            $problema = new informatico($value['tipo'], $value['titulo'], $value['descripcion'], $value['prioridad'], $value['fecha'], $value['equipoAfectado'], $value['id']);
        } else {
        // Se añade $value['zonaCuerpo'] al final
            $problema = new ergonomico($value['tipo'], $value['titulo'], $value['descripcion'], $value['prioridad'], $value['fecha'], $value['zonaCuerpo'], $value['id']);
        }
        $arrayProblemas[] = $problema;
    }
    return $arrayProblemas;
}


    public function agregar($problema) {
        try {
            if ($problema instanceof informatico) {
            // Se añade equipoAfectado a la consulta INSERT
            $consulta = "INSERT INTO flotaProblemas (tipo, titulo, descripcion, prioridad, fecha, equipoAfectado) VALUES (:tipo, :titulo, :descripcion, :prioridad, :fecha, :equipoAfectado)";
            $stmt = $this->conn->prepare($consulta);
            $stmt->bindValue(':tipo', "informatico");
            $stmt->bindValue(':titulo', $problema->getTitulo());
            $stmt->bindValue(':descripcion', $problema->getDescripcion());
            $stmt->bindValue(':prioridad', $problema->getPrioridad());
            $stmt->bindValue(':fecha', $problema->getFecha());
            $stmt->bindValue(':equipoAfectado', $problema->getEquipoAfectado()); // Nuevo bind
        } else {
            // Se añade zonaCuerpo a la consulta INSERT
            $sql = "INSERT INTO flotaProblemas (tipo, titulo, descripcion, prioridad, fecha, zonaCuerpo) VALUES (:tipo, :titulo, :descripcion, :prioridad, :fecha, :zonaCuerpo)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(':tipo', "ergonomico");
            $stmt->bindValue(':titulo', $problema->getTitulo());
            $stmt->bindValue(':descripcion', $problema->getDescripcion());
            $stmt->bindValue(':prioridad', $problema->getPrioridad());
            $stmt->bindValue(':fecha', $problema->getFecha());
            $stmt->bindValue(':zonaCuerpo', $problema->getZonaCuerpo()); // Nuevo bind
        }
        return $stmt->execute();

        } catch (PDOException $e) {
            // Manejo de errores, por ejemplo, loguear el error
            return false;
        } 
    }


    public function buscar($id) {
        $sql="SELECT * FROM flotaProblemas WHERE id=$id";
        $stmt=$this->conn->query($sql);
 
        while ($value = $stmt->fetch(PDO::FETCH_ASSOC)){
            if ($value['tipo']=="informatico"){
                // Se añade $value['equipoAfectado'] al final
                $problema = new informatico ($value['tipo'], $value['titulo'], $value['descripcion'], $value['prioridad'], $value['fecha'], $value['equipoAfectado'], $value['id']);
            }else{
                // Se añade $value['zonaCuerpo'] al final
                $problema = new ergonomico ($value['tipo'], $value['titulo'], $value['descripcion'], $value['prioridad'], $value['fecha'], $value['zonaCuerpo'], $value['id']);
            }
        return $problema;
        }
    }

    public function actualizar($problema) {
        try {
            if ($problema instanceof informatico){
                // Se añade equipoAfectado al UPDATE
                $sql="UPDATE flotaProblemas SET tipo='informatico', titulo=:titulo, descripcion=:descripcion, prioridad=:prioridad, fecha=:fecha, equipoAfectado=:equipoAfectado WHERE id = :id";
                $stmt = $this->conn->prepare($sql);
                $stmt->bindValue(':id', $problema->getId());
                $stmt->bindValue(':titulo', $problema->getTitulo());
                $stmt->bindValue(':descripcion', $problema->getDescripcion());
                $stmt->bindValue(':prioridad', $problema->getPrioridad());
                $stmt->bindValue(':fecha', $problema->getFecha());
                $stmt->bindValue(':equipoAfectado', $problema->getEquipoAfectado()); // Nuevo bind
            }else{
                // Se añade zonaCuerpo al UPDATE
                $sql="UPDATE flotaProblemas SET tipo='ergonomico', titulo=:titulo, descripcion=:descripcion, prioridad=:prioridad, fecha=:fecha, zonaCuerpo=:zonaCuerpo WHERE id = :id";
                $stmt = $this->conn->prepare($sql);
                $stmt->bindValue(':id', $problema->getId());
                $stmt->bindValue(':titulo', $problema->getTitulo());
                $stmt->bindValue(':descripcion', $problema->getDescripcion());
                $stmt->bindValue(':prioridad', $problema->getPrioridad());
                $stmt->bindValue(':fecha', $problema->getFecha());
                $stmt->bindValue(':zonaCuerpo', $problema->getZonaCuerpo()); // Nuevo bind
            } 
        // Ejecutamos
            return $stmt->execute(); 
        
        } catch (PDOException $e) {
            return false;
        }
    }

    public function eliminar($id) {
        $sql="DELETE FROM flotaProblemas WHERE id=:id";
        $stmt=$this->conn->prepare($sql);
        $stmt->bindValue(':id',$id);
        return $stmt->execute();
    }


    //Operaciones de gestión de usuarios
    public function registrarUsuario(Usuario $usuario) {
        try {
            $sql ="INSERT INTO Usuario (email, password) VALUES (:email, :password)";
            $stmt = $this->conn->prepare($sql);

            // Usamos los getter del objeto
            $stmt->bindValue(':email', $usuario->getEmail());
            $stmt->bindValue(':password', $usuario->getPassword());

            return $stmt->execute();

        } catch (PDOException $e) {
            echo $e->getMessage() . $e->getCode();
        }
    }




    public function buscarUsuarioPorEmail($email) {
        $sql = "SELECT * FROM Usuario WHERE email = :email LIMIT 1";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(':email', $email);
        $stmt->execute();

        $value = $stmt->fetch(PDO::FETCH_ASSOC);

        // Si encontró algo, creamos y devolvemos el objeto Usuario
        if ($value) {
            return new Usuario($value['email'], $value['password'], $value['id']);
        }
        // Si no existe, devolvemos false o null
        return false;
    }
}
?>