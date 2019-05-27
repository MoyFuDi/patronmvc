<?php   
    class Conectar{
        public static function conexion(){
            $conexion = new mysqli("localhost","admin","Sup3rAdm1n.","patronmvc");
            $conexion->query("SET NAMES 'utf8'");
            return $conexion;
        }
    }