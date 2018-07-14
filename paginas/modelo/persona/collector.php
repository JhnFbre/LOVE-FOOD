<?php
include_once('database.php');

// Define configuration
define("DB_HOST", "ec2-107-21-95-70.compute-1.amazonaws.com");
define("DB_USER", "tziirijesvnwbd");
define("DB_PASS", "2dd110e438d672d854e96fd24cc6f398bdeaff25707fa16e057bd4c8ed1233b2");
define("DB_NAME", "d6nas1lincjd3e");


class Collector extends dataBase
{
  public static $db;
  private $host      = DB_HOST;
  private $username  = DB_USER;
  private $password  = DB_PASS;
  private $dbname    = DB_NAME;
    
  public function __construct()
  {
    self::$db = new dataBase($this->username, $this->password, $this->host, $this->dbname);
  }

}

?>
