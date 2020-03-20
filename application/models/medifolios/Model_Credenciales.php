<?php

class Model_Credenciales extends CI_Model{
    
    var $credenciales = array(
        "codEmpresa"    => "",
        "servidor"      => ""
    );
    
    function crearCredenciales($entidad){
        switch ($entidad) {
            case "neumovida_armenia":
                $this->credenciales["codEmpresa"] = "MDAwMDAwMDAwMDA5MDA2ODA5NzQ1OA%253D%253D";
                $this->credenciales["servidor"] = "www.server3medifolios.net";
                break;

        }//switch  
    }//function crearCredenciales($entidad)
    
}//class Model_Credenciales extends CI_Model