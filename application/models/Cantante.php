<?php

    class cantante extends CI_Model
    {
        function __construct()
        {
            parent::__construct();
        }
        //Funcion para insertar un servicio
        function insertar($datos){
            return $this->db->insert("capital_efaf", $datos);

        }
        //Funcion para consultar servicios
        function obtenerTodos(){
            $listadoCantantes=
            $this->db->get("capital_efaf");

            if($listadoCantantes
                ->num_rows()>0){//Si hay datos
                    return $listadoCantantes->result();
            }else{//No hay datos
                return false;
            }

        }
        //Borrar servicio
        function borrar($pais_efaf){
            $this->db->where("pais_efaf",$pais_efaf);
            return $this->db->delete("capital_efaf");
        }

    }//Cierre de la clase
?>
