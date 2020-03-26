<?php
namespace Model\php;

define('CONNFILE', dirname(__FILE__));
define('CONNDIR', '/components/model/sql/config.php');
require( dirname(CONNFILE) . CONNDIR);

/**
 *@sqlConn() DB connexion function
 */
use PDO;
 class ModelClass
 {

   public function sqlConn()
   {
     try{
       $db = new PDO(HOSTING, DB_USER, DB_PASSWORD, array(
         PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
         PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
       ));
     }catch(\PDOException | \Throwable $e){
       die('Erreur de connexion à la base de donnée : '.$e->getMessage());
     }
     return $db;
   }

 }
