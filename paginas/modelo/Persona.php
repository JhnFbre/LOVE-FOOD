<?php

class Persona
{
    private $idPersona;
    private $nombre;
    private $apellido;
    private $contacto;
    private $usuario;
    private $clave;
    private $sexo;
    
    
     function __construct($idPersona, $nombre, $apellido, $contacto, $usuario, $clave,$sexo) {
       $this->idPersona = $idPersona;
       $this->nombre = $nombre;
       $this->apellido = $apellido;
       $this->contacto = $contacto;
       $this->usuario = $usuario;
       $this->clave = $clave;
       $this->sexo = $sexo;
       
     }
    
     function setIdPersona($idPersona){
       $this->idPersona = $idPersona;
     } 
     function getIdPersona(){
       return $this->idPersona;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 
    
     function setApellido($apellido){
       $this->apellido = $apellido;
     } 
     function getApellido(){
       return $this->apellido;
     } 
    
     function setContacto($contacto){
       $this->contacto = $contacto;
     } 
     function getContacto(){
       return $this->contacto;
     } 

     function setUsuario($usuario){
       $this->usuario = $usuario;
     } 
     function getUsuario(){
       return $this->usuario;
     } 
   
     function setClave($clave){
       $this->clave = $clave;
     } 
     function getClave(){
       return $this->clave;
     } 
    
     function setSexo($sexo){
       $this->sexo = $sexo;
     } 
     function getSexo(){
       return $this->sexo;
     } 
    
}

?> 