<?php 

 class Devoluciones extends Conectar{
    private $id_devoluciones;
    private $objeto_devolver;
    private $cantidad_devuelta;
    private $dia_devolucion;
    private $hora_devolucion;

    public function __construct($id_devoluciones = 0 , $objeto_devolver = "" , $cantidad_devuelta = "" , $dia_devolucion = "" , $hora_devolucion = "") {
        $this->id_devoluciones = $id_devoluciones;
        $this->objeto_devolver = $objeto_devolver;
        $this->cantidad_devuelta = $cantidad_devuelta;
        $this->dia_devolucion = $dia_devolucion;
        $this->hora_devolucion = $hora_devolucion;
    }

    //todo ----------------id_devoluciones----------------

    public function set_id_devoluciones($id_devoluciones){
        $this-> id_devoluciones = $id_devoluciones;
    }

    public function get_id_devoluciones(){
        return $this-> id_devoluciones;
    }

    //todo ----------------objeto_devolver----------------

    public function set_objeto_devolver($objeto_devolver){
        $this-> objeto_devolver = $objeto_devolver;
    }

    public function get_objeto_devolver(){
        return $this-> objeto_devolver;
    }

    //todo ----------------cantidad_devuelta----------------

    public function set_cantidad_devuelta($cantidad_devuelta){
        $this-> cantidad_devuelta = $cantidad_devuelta;
    }

    public function get_cantidad_devuelta(){
        return $this-> cantidad_devuelta;
    }

    //todo ----------------dia_devolucion----------------

    public function set_dia_devolucion($dia_devolucion){
        $this-> dia_devolucion = $dia_devolucion;
    }

    public function get_dia_devolucion(){
        return $this-> dia_devolucion;
    }

    //todo ----------------hora_devolucion----------------

    public function set_hora_devolucion($hora_devolucion){
        $this-> hora_devolucion = $hora_devolucion;
    }

    public function get_hora_devolucion(){
        return $this-> hora_devolucion;
    }

    //todo --------------FUNCIONES ESPECIALES--------------

    public function get_devolucion(){
        $conectar = parent::conexion();
        parent::set_name();
        $stm = $conectar->prepare("SELECT * FROM devoluciones");
        $stm -> execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>