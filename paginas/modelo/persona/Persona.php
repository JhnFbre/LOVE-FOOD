<?php

class Persona
{
    private $idPersona;
    private $nombre;
    private $apellido;
    private $email;
    private $usuario;
    private $clave;
    
    
     function __construct($idPersona, $nombre, $apellido, $email, $usuario, $clave) {
       $this->idPersona = $idPersona;
       $this->nombre = $nombre;
       $this->apellido = $apellido;
       $this->email = $email;
       $this->usuario = $usuario;
       $this->clave = $clave;
       
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
    
     function setEmail($email){
       $this->email = $email;
     } 
     function getEmail(){
       return $this->email;
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
    
}

?> 