<?php

include_once('Respuestas.php');
include_once("modelo/collector.php");

class RespuestasCollector extends collector
{
  
 function showRespuestas() {
    $rows = self::$db->getRows("SELECT * FROM respuesta");        
    ##echo "linea 1";
    $arrayRespuestas= array();        
    foreach ($rows as $c){
      $aux = new Respuestas($c{'id'},$c{'idusuario'},$c{'usuario'},$c{'rsppreferencia'},$c{'rspdesayunosalado'},$c{'rspdesayunodulce'},$c{'rspalmuerzo'},$c{'rspcena'},$c{'rspcomidatipica'},$c{'rspcarnes'},$c{'rsppostres'},$c{'rspsaboresdulces'},$c{'rspbebida'},$c{'rspcomidaextranjera'});
      array_push($arrayRespuestas, $aux);
    }
    return $arrayRespuestas;     
       
  }
    
    /*function deletePersona($id) {
        $rows = self::$db->deleteRow("DELETE FROM usuario WHERE id=$id",null);
    
    
    }*/
   
    function createRespuesta($idUsuario,$usuario, $rspPreferencia, $rspDesayunoSalado, $rspDesayunoDulce, $rspAlmuerzo,$rspCena,$rspComidaTipica,$rspCarnes,$rspPostres,$rspSaboresDulces,$rspBebida,$rspComidaExtranjera) {
        $rows = self::$db->insertRow("INSERT INTO respuesta (idUsuario,usuario,rspPreferencia,rspDesayunoSalado,rspDesayunoDulce,rspAlmuerzo,rspCena,rspComidaTipica,rspCarnes,rspPostres,rspSaboresDulces,rspBebida,rspComidaExtranjera) VALUES ($idUsuario','$usuario', '$rspPreferencia','$rspDesayunoSalado','$rspDesayunoDulce','$rspAlmuerzo','$rspCena','$rspComidaTipica','$rspCarnes','$rspPostres','$rspSaboresDulces','$rspBebida','$rspComidaExtranjera')",null);
        
    }

   
    
     /*function updatePersona($id,$nombre,$apellido,$email,$usuario,$clave) {
      
         $rows = self::$db->insertRow("UPDATE usuario SET nombre='$nombre' , apellido='$apellido' , email='$email' , usuario='$usuario' , clave='$clave' WHERE id_persona='$id'" ,null);
    }*/
}
?>
