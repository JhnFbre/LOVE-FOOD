<?php

class Respuestas
{
    private $id;
    private $idUsuario;
    private $usuario;
    private $rspPreferencia;
    private $rspDesayunoSalado;
    private $rspDesayunoDulce;
    private $rspAlmuerzo;
    private $rspCena;
    private $rspComidaTipica;
    private $rspCarnes;
    private $rspPostres;
    private $rspSaboresDulces;
    private $rspBebida;
    private $rspComidaExtranjera;

    
    
    
     function __construct($id,$idUsuario, $usuario, $rspPreferencia, $rspDesayunoSalado, $rspDesayunoDulce, $rspAlmuerzo,$rspCena,$rspComidaTipica,$rspCarnes,$rspPostres,$rspSaboresDulces,$rspBebida,$rspComidaExtranjera) {
       $this->id = $id;
       $this->idUsuario = $idUsuario;
       $this->usuario = $usuario;
       $this->rspPreferencia = $rspPreferencia;
       $this->rspDesayunoSalado = $rspDesayunoSalado;
       $this->rspDesayunoDulce = $rspDesayunoDulce;
       $this->rspAlmuerzo = $rspAlmuerzo;
       $this->rspCena = $rspCena;
       $this->rspComidaTipica = $rspComidaTipica;
       $this->rspCarnes = $rspCarnes;
       $this->rspPostres = $rspPostres;
       $this->rspSaboresDulces= $rspSaboresDulces;
       $this->rspBebida = $rspBebida;
       $this->rspComidaExtranjera = $rspComidaExtranjera;
       
     }
     function setId($id){
       $this->id = $id;
     } 
     function getId(){
       return $this->id;
     }  
     function setIdUsuario($idUsuario){
       $this->idUsuario = $idUsuario;
     } 
     function getIdUsuario(){
       return $this->idUsuario;
     } 
     function setUsuario($usuario){
       $this->usuario = $usuario;
     } 
     function getUsuario(){
         echo $this->usuario;
       return $this->usuario;
     }   
    function getsomething(){
         echo $this->usuario;
       return $this->usuario;
     } 
     function setRspPreferencia($preferencia){
       $this->rspPreferencia = $rspPreferencia;
     } 
     function getRspPreferencia(){
       return $this->rspPreferencia;
     }  
     function setRspDesayunoSalado($rspDesayunoSalado){
       $this->rspDesayunoSalado = $rspPreferencia;
     } 
     function getRspDesayunoSalado(){
       return $this->rspDesayunoSalado;
     }  
     function setRspDesayunoDulce($rspDesayunoDulce){
       $this->rspDesayunoDulce = $rspDesayunoDulce;
     } 
     function getRspDesayunoDulce(){
       return $this->rspDesayunoDulce;
     }  
     function setRspAlmuerzo($rspAlmuerzo){
       $this->rspAlmuerzo = $rspAlmuerzo;
     } 
     function getRspAlmuerzo(){
       return $this->rspAlmuerzo;
     } 
     function setRspCena($rspCena){
       $this->rspCena = $rspCena;
     } 
     function getRspCena(){
       return $this->rspCena;
     } 
     function setRspComidaTipica($rspComidaTipica){
       $this->rspComidaTipica = $rspComidaTipica;
     } 
     function getRspComidaTipica(){
       return $this->rspComidaTipica;
     } 
     function setRspCarnes($rspCarnes){
       $this->rspCarnes = $rspCarnes;
     } 
     function getRspCarnes(){
       return $this->rspCarnes;
     } 
     function setRspPostres($rspPostres){
       $this->rspPostres = $rspPostres;
     } 
     function getRspPostres(){
       return $this->rspPostres;
     } 
     function setRspBebida($rspBebida){
       $this->rspBebida = $rspBebida;
     } 
     function getRspBebida(){
       return $this->rspBebida;
     } 
     function setRspSaboresDulces($rspSaboresDulces){
       $this->rspSaboresDulces = $rspSaboresDulces;
     } 
     function getRspSaboresDulces(){
       return $this->rspSaboresDulces;
     }
     function setRspComidaExtranjera($rspComidaExtranjera){
       $this->rspComidaExtranjera = $rspComidaExtranjera;
     } 
     function getRspComidaExtranjera(){
       return $this->rspComidaExtranjera;
     } 
    
   }
 

?> 