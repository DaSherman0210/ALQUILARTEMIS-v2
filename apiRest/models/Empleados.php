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

    //todo ----------------id_empleado----------------

    function setId_empleado($id_empleado){
        $this->id_empleado=$id_empleado;
    }

    function getId_empleado(){
        return $this->id_empleado;
    }

    //todo ----------------nombres----------------

    function setNombres($nombres){
        $this->nombres = $nombres;
    }

    function getNombres(){
        return $this->nombres;
    }

    //todo ----------------direccion----------------

    function setDireccion($direccion){
        $this->direccion = $direccion;
    }

    function getDireccion(){
        return $this->direccion;
    }

    //todo ----------------telefono----------------

    function setTelefono($telefono){
        $this->telefono=$telefono;
    }

    function getTelefono(){
        return $this->telefono;
    }

    //todo ----------------email----------------


    function setEmail($email){
        $this->email=$email;
    }

    function getEmail(){
        return $this->email;
    }

    //todo --------------FUNCIONES ESPECIALES--------------

    public function get_empleado(){
        $conectar = parent::conexion();
        parent::set_name();
        $stm = $conectar->prepare("SELECT * FROM empleados");
        $stm -> execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insert_empleado($nombres, $direccion , $telefono , $email){
        $conectar = parent:: conexion();
        parent::set_name();
        $stm = $conectar -> prepare("INSERT INTO empleados (nombre , direccion , telefono , email) VALUES (?,?,?,?)");
        $stm ->bindValue(1 , $nombres);
        $stm ->bindValue(2 , $direccion);
        $stm ->bindValue(3 , $telefono);
        $stm ->bindValue(4 , $email);
        $stm -> execute();
        return $stm -> fetchAll(PDO::FETCH_ASSOC);
    }
}

?>