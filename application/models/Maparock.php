<?php
class Maparock extends CI_Model
    {
        function __construct()
        {
            parent::__construct();
        }
        function obtenerTodos(){
            $listadoCantantes=
            $this->db->get("capital_efaf");
            if ($listadoCantantes->num_rows()
                >0){
                    return $listadoCantantes->result();
                }
                return false;
        }
    }
