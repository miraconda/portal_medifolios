<?php
class Model_Pacientes extends CI_Model{
    
    
    function consultarPacientePorId($entidad, $id_paciente){
        #Creamos respuesta generica
        $response = array(
            "status"    => false,
            "title"     => "Error",
            "message"   => "Intentalo de nuevo mas tarde"
        );
        
        #Dependiendo de la entidad validamos parametros
        $servidor = "";
        $codEmpresa = "";
        switch ($entidad) {
            case "neumovida_armenia":
                $codEmpresa = "MDAwMDAwMDAwMDA5MDA2ODA5NzQ1OA%253D%253D";
                $servidor = "www.server3medifolios.net";
                break;

        }//switch               
 
        #Iniciamos cUrl
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://".$servidor."/index.php/api_pacientes/get_method/".$codEmpresa."/cargar_paciente_solo_identificacion",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "num_id_paciente=".$id_paciente,
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
    }//function consultarPacientePorId()
    
}//class Model_Pacientes extends CI_Model