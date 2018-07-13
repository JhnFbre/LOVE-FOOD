<?php

include_once('Respuestas.php');
include_once("/var/www/html/LOVE-FOOD/paginas/modelo/collector.php");

class RespuestasCollector extends collector
{
  
 /* function showPersonas() {
    $rows = self::$db->getRows("SELECT * FROM respuesta");        
    ##echo "linea 1";
    $arrayRespuestas= array();        
    foreach ($rows as $c){
      $aux = new Persona($c{'id'},$c{'nombre'},$c{'apellido'},$c{'email'},$c{'usuario'},$c{'clave'});
      array_push($arrayPersona, $aux);
    }
    return $arrayPersona;        
  }*/
    
    /*function deletePersona($id) {
        $rows = self::$db->deleteRow("DELETE FROM usuario WHERE id=$id",null);
    
    
    }*/
   
    function createRespuesta($usuario, $rspPreferencia, $rspDesayunoSalado, $rspDesayunoDulce, $rspAlmuerzo,$rspCena,$rspComidaTipica,$rspCarnes,$rspPostres,$rspSaboresDulces,$rspBebida,$rspComidaExtranjera) {
        $rows = self::$db->insertRow("INSERT INTO respuesta (usuario,rspPreferencia,rspDesayunoSalado,rspDesayunoDulce,rspAlmuerzo,rspCena,rspComidaTipica,rspCarnes,rspPostres,rspSaboresDulces,rspBebida,rspComidaExtranjera) VALUES ('$usuario', '$rspPreferencia','$rspDesayunoSalado','$rspDesayunoDulce','$rspAlmuerzo','$rspCena','$rspComidaTipica','$rspCarnes','$rspPostres','$rspSaboresDulces','$rspBebida','$rspComidaExtranjera')",null);
        
    }
    

    
     /*function updatePersona($id,$nombre,$apellido,$email,$usuario,$clave) {
      
         $rows = self::$db->insertRow("UPDATE usuario SET nombre='$nombre' , apellido='$apellido' , email='$email' , usuario='$usuario' , clave='$clave' WHERE id_persona='$id'" ,null);
    }*/
}
?>
