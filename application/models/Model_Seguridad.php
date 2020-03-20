<?php
class Model_Seguridad extends CI_Model{
    
    
    function crearPreguntasValidacion($data){
        $arrayTelefonos = array(
            "3127165295-3122093195",
            "3122428425-3122566973",
            "7321876-3167893393",
            "3117483640-3228303241",
            "3122263773",
            "3203378811",
            "3128889222",
            "3174809453",
            "3106185316",
            "3136025445",
            "3136994800-3117278525",
            "3127774443-3053300365",
            "7342418-3167554685"
        );
        shuffle($arrayTelefonos);
        
        $arrayDirecciones = array(
            "CALLE 32 N 19-56",
            "EL PLACER MZ G N 137",
            "CARRERA 16 45-51",
            "CALLE 54 17-21",
            "MZ 4 N 114",
            "CALLE 13 N 4A 25",
            "MZ 16 N 17",
            "CALLE 27 A 21-39 PISO 1",
            "NO 29-21",
            "CRA 9 13-32",
            "MZ 14 CASA 24",
            "MZ 15 CASA 9",
            "CRA 11 11-28",
            "CALLE 8 N 14-32",
            "AVDA CENTENARIO FINCA LA FE",
            "CALLE 50 40-80 BLOQUE 1 APTO 402",
            "MZ 7 N 15A"
        );
        shuffle($arrayDirecciones);
        
        $arrayCiudades = array(
            "ABEJORRAL (ANTIOQUIA)",
            "ABRIAQUI (ANTIOQUIA)",
            "AGUA DE DIOS (CUNDINAMARCA)",
            "AGUADA (SANTANDER)", 
            "ALBANIA (SANTANDER)",
            "ALGECIRAS (HUILA)",
            "AMBALEMA (TOLIMA)",
            "ANCUYA (NARIÑO)",
            "ANDALUCIA (VALLE DEL CAUCA",
            "ANDES (ANTIOQUIA)",
            "ANSERMA (CALDAS)",
            "ESPINAL (TOLIMA)",
            "FACATATIVA (CUNDINAMARCA)",
            "FALAN (TOLIMA)",
            "SAN JOSE DE MIRANDA (SANTANDER)",
            "SAN JOSE DE PARE (BOYACA)",
            "NEIVA (HUILA)"
        );
        shuffle($arrayCiudades);
        
        $pregunta_01 = array(
            $data["tel_paciente"],
            $arrayTelefonos[0],
            $arrayTelefonos[1],
            $arrayTelefonos[2]
        );
        shuffle($pregunta_01);
        
        $pregunta_02 = array(
            $data["dir_paciente"],
            $arrayDirecciones[0],
            $arrayDirecciones[1],
            $arrayDirecciones[2]
        );
        shuffle($pregunta_02);
        
        $pregunta_03 = array(
            $data["ciudad_nacimiento_desc"],
            $arrayCiudades[0],
            $arrayCiudades[1],
            $arrayCiudades[2]
        );
        shuffle($pregunta_03);
        
        $preguntas = array(
            $pregunta_01,
            $pregunta_02,
            $pregunta_03
        );
        
        return $preguntas;
    }//function crearPreguntasValidacion($info)
    
    
    function validarPreguntas($paciente, $preguntas){
        $response = array(
            "status"    => false,
            "title"     => "Error",
            "message"   => "Intentalo de nuevo mas tarde"
        );
        
        $status = true;
        
        if($paciente["tel_paciente"] != $preguntas["pregunta_01"]){
            $status = false;
        }//if
        
        if($paciente["dir_paciente"] != $preguntas["pregunta_02"]){
            $status = false;
        }//if
        
        if($paciente["ciudad_nacimiento_desc"] != $preguntas["pregunta_03"]){
            $status = false;
        }//if
        
        if($status){
            $response = array(
                "status"    => true,
                "title"     => "Ok",
                "message"   => "Validacion exitosa"
            );
        }else{
            $response["title"] = "Error de validacion";
            $response["message"] = "Las preguntas no concuerdan con la informacion del sistema.";
        }
        return $response;
    }
}//class Model_Seguridad extends CI_Model