<?php

include_once('Persona.php');
include_once("../collector.php");

class PersonaCollector extends collector
{
  
  function showPersonas() {
    $rows = self::$db->getRows("SELECT * FROM usuario");        
    ##echo "linea 1";
    $arrayPersona= array();        
    foreach ($rows as $c){
      $aux = new Persona($c{'id'},$c{'nombre'},$c{'apellido'},$c{'contacto'},$c{'usuario'},$c{'clave'},$c{'sexo'});
      array_push($arrayPersona, $aux);
    }
    return $arrayPersona;        
  }
    
    function showPersonasId($id) {
        //echo "*****AUX********** ";
    $rows = self::$db->getRows("SELECT * FROM usuario where id = " .$id);        
    ##echo "linea 1";
       
    foreach ($rows as $c){
      $aux = new Persona($c{'id'},$c{'nombre'},$c{'apellido'},$c{'contacto'},$c{'usuario'},$c{'clave'},$c{'sexo'});

    }
        //print_r($aux);
    return $aux;        
  }
  
    
    
    function deletePersona($id) {
        $rows = self::$db->deleteRow("DELETE FROM usuario WHERE id=$id",null);
    }
   
    function createPersona($nombre,$apellido,$contacto,$usuario,$clave,$sexo) {
        $rows = self::$db->insertRow("INSERT INTO usuario (nombre,apellido,contacto,usuario,clave,sexo) VALUES ('$nombre', '$apellido','$contacto','$usuario','$clave','$sexo')",null);
        
    }
    
     /*function updatePersona($id,$nombre,$apellido,$email,$usuario,$clave) {
      
         $rows = self::$db->insertRow("UPDATE usuario SET nombre='$nombre' , apellido='$apellido' , email='$email' , usuario='$usuario' , clave='$clave' WHERE id_persona='$id'" ,null);
    }*/
}
?>
