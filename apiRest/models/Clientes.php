<?php

class Clientes extends Conectar{
    private $id_cliente;
    private $nombre;
    private $ubicacion;
    private $telefono;
    private $email;

    public function __construct($id_cliente=0, $nombre='', $ubicacion='', $telefono='', $email=''){
        $this->id_cliente = $id_cliente;
        $this->nombre = $nombre;
        $this->ubicacion = $ubicacion;
        $this->telefono = $telefono;
        $this->email = $email;
    }

    function setId_cliente($id_cliente){
        $this->id_cliente=$id_cliente;
    }

    function getId_cliente(){
        return $this->id_cliente;
    }

    function setNombre($nombre){
        $this->nombre = $nombre;
    }

    function getNombre(){
        return $this->nombre;
    }

    function setUbicacion($ubicacion){
        $this->ubicacion = $ubicacion;
    }

    function getUbicaion(){
        return $this->ubicacion;
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


    public function get_cliente(){
        $conectar = parent::conexion();
        parent::set_name();
        $stm = $conectar->prepare("SELECT * FROM clientes");
        $stm -> execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get_cliente_id($id_cliente){
        $conectar = parent::conexion();
        parent::set_name();
        $stm = $conectar->prepare("SELECT * FROM cliente WHERE id=?");
        $stm -> bindvalue(1,$id_cliente);
        $stm -> execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    /* public function insert_cliente($nombre, $telefono, $correo, $documento, $tipo_documento, $tipo_cliente){
        $conectar=parent::Conexion();
        parent::set_name();
        $stm="INSERT INTO cliente(nombre,telefono,correo,documento,tipo_documento, tipo_cliente) VALUES(?,?,?,?,?,?)";
        $stm=$conectar->prepare($stm);
        $stm->bindValue(1,$nombre);
        $stm->bindValue(2,$telefono);
        $stm->bindValue(3,$correo);
        $stm->bindValue(4,$documento);
        $stm->bindValue(5,$tipo_documento);
        $stm->bindValue(6,$tipo_cliente);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);

    } */
}
?>