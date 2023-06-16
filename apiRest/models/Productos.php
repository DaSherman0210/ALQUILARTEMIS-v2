<?php
class Productos extends Conectar{
    private $id_producto;
    private $nombre;
    private $stock_inicial;
    private $cantidad_ingresos;
    private $cantidad_salidas;
    private $fecha_inventario;
    private $tipo_operacion;

    public function __contruct($id_producto = 0 , $nombre = "" , $stock_inicial = "" , $cantidad_ingresos = "" , $cantidad_salidas = "" , $fecha_inventario = "" , $tipo_operacion = ""){
        $this-> id_producto = $id_producto;
        $this-> nombre = $nombre;
        $this-> stock_inicial = $stock_inicial;
        $this-> cantidad_ingresos = $cantidad_ingresos;
        $this-> cantidad_salidas = $cantidad_salidas;
        $this-> fecha_inventario = $fecha_inventario;
        $this-> tipo_operacion = $tipo_operacion;
    }
 
    //todo -- SETTERS
    public function setId_producto($id_producto){
        $this -> id_producto = $id_producto;
    }

    public function setNombre($nombre){
        $this -> nombre = $nombre;
    }

    public function setStock_inicial($stock_inicial){
        $this -> stock_inicial = $stock_inicial;
    }

    public function setCantidad_ingresos($cantidad_ingresos){
        $this -> cantidad_ingresos = $cantidad_ingresos;
    }

    public function setCantidad_salidas($cantidad_salidas){
        $this -> cantidad_salidas = $cantidad_salidas;
    }


    public function setFecha_inventario($fecha_inventario){
        $this -> fecha_inventario = $fecha_inventario;
    }

    public function setTipo_operacion($tipo_operacion){
        $this -> tipo_operacion = $tipo_operacion;
    }

    //todo -- GETTERS

    public function getId_producto(){
        return $this-> id_producto;
    }
    public function getnombre(){
        return $this-> nombre;
    }
    public function getstock_inicial(){
        return $this-> stock_inicial;
    }
    public function getcantidad_ingresos(){
        return $this-> cantidad_ingresos;
    }
    public function getcantidad_salidas(){
        return $this-> cantidad_salidas;
    }
    public function getfecha_inventario(){
        return $this-> fecha_inventario;
    }
    public function gettipo_operacion(){
        return $this-> tipo_operacion;
    }

    //? Funciones especiales


    public function get_producto(){
        $conectar = parent::conexion();
        parent::set_name();
        $stm = $conectar->prepare("SELECT * FROM productos");
        $stm -> execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insert_producto($nombre, $stock_inicial , $cantidad_ingresos , $cantidad_salidas , $fecha_inventario , $tipo_operacion ){
        $conectar = parent:: conexion();
        parent::set_name();
        $stm = $conectar -> prepare("INSERT INTO productos (nombre , stock_inicial , cantidad_ingresos , cantidad_salidas , fecha_inventario , tipo_operacion) VALUES (?,?,?,?,?,?)");
        $stm ->bindValue(1 , $nombre);
        $stm ->bindValue(2 , $stock_inicial);
        $stm ->bindValue(3 , $cantidad_ingresos);
        $stm ->bindValue(4 , $cantidad_salidas);
        $stm ->bindValue(5 , $fecha_inventario);
        $stm ->bindValue(6 , $tipo_operacion);
        $stm -> execute();
        return $stm -> fetchAll(PDO::FETCH_ASSOC);
    }
}

?>