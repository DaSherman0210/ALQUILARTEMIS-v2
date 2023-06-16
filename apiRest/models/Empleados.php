<?php
class Empleados extends Conectar{
    private $id_empleado;
    private $nombres;
    private $direccion;
    private $telefono;
    private $email;
 
    public function __construct($id_empleado=0, $nombres='', $direccion='', $telefono='', $email=''){
        $this->id_empleado = $id_empleado;
        $this->nombres = $nombres;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
        $this->email = $email;
    }
    function setId_empleado($id_empleado){
        $this->id_empleado=$id_empleado;
    }

    function getId_empleado(){
        return $this->id_empleado;
    }

    function setNombre($nombres){
        $this->nombres = $nombres;
    }

    function getNombres(){
        return $this->nombres;
    }

    function setDireccion($direccion){
        $this->direccion = $direccion;
    }

    function getDireccion(){
        return $this->direccion;
    }

    function setTelefono($telefono){
        $this->telefono=$telefono;
    }

    function getTelefono(){
        return $this->telefono;
    }

    function setEmail($email){
        $this->email=$email;
    }

    function getEmail(){
        return $this->email;
    }

    public function get_empleado(){
        $conectar = parent::conexion();
        parent::set_name();
        $stm = $conectar->prepare("SELECT * FROM empleados");
        $stm -> execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>