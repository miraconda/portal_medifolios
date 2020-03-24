<?php
class Model_HC extends CI_Model{
                            
    function consultarHistorialClinico($entidad, $id_paciente){
        #Creamos respuesta generica
        $response = array(
            "status"    => false,
            "title"     => "Error",
            "message"   => "Intentalo de nuevo mas tarde"
        );
        
        #Dependiendo de la entidad validamos parametros
        $this->load->model("medifolios/Model_Credenciales");
        $this->Model_Credenciales->crearCredenciales($entidad);
        $credenciales = $this->Model_Credenciales->credenciales;         
 
        #Iniciamos cUrl
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://".$credenciales["servidor"]."/index.php/api_historia_clinica/get_method/".$credenciales["codEmpresa"]."/listar_historias_por_paciente/".$id_paciente,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
        ));
        $solicitud = curl_exec($curl);
        curl_close($curl);
        $solicitud = json_decode($solicitud, true);               
        if($solicitud["state"]){
            $response = array(
                "status"    => true,
                "title"     => "ok",
                "message"   => $solicitud["message"],
                "data"      => $solicitud["data"]
            );
        }else{
            $response["message"] = $solicitud["message"];
        }//if
        #retornamos respuesta
        return $response;
    }
    
    
    
    
    
    function consultarHistoriaClinica($entidad, $documento, $cod_historia){
        #Creamos respuesta generica
        $response = array(
            "status"    => false,
            "title"     => "Error",
            "message"   => "Intentalo de nuevo mas tarde"
        );
        
        #Dependiendo de la entidad validamos parametros
        $this->load->model("medifolios/Model_Credenciales");
        $this->Model_Credenciales->crearCredenciales($entidad);
        $credenciales = $this->Model_Credenciales->credenciales;         
 
        #Iniciamos cUrl
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://".$credenciales["servidor"]."/index.php/api_historia_clinica/get_method/".$credenciales["codEmpresa"]."/obtener_pdf_historia_cod_historia_cifrado/",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "cod_historia=".$cod_historia,
            CURLOPT_HTTPHEADER => array(
              "Content-Type: application/x-www-form-urlencoded"
            ),
          ));
        $solicitud = curl_exec($curl);
        curl_close($curl);
        $solicitud = json_decode($solicitud, true);               
        if($solicitud["state"]){
            $response = array(
                "status"    => true,
                "title"     => "ok",
                "message"   => $solicitud["message"],
                "data"      => $solicitud["data"]
            );
        }else{
            $response["message"] = $solicitud["message"];
        }//if
        #retornamos respuesta
        return $response;
    }
}//class Model_Pacientes extends CI_Model