<?php

 try
 {
 	$db = new PDO ('mysql:host='.SERVER_NAME.';dbname='.DB_NAME,DB_USER,DB_PASSWORD);
 	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
 	$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC); // fetch it as he name on db table
 	$db->exec('SET NAMES utf8');
 }
 catch(PDOException $e) //thre new Excption
 {
 	die($e->getMessage() );  // die to end all script
 }

 /*
 try
 {
 	$db = new PDO ('mysql:host='.SERVER_NAME.';dbname='.DB_NAME,DB_USER,DB_PASSWORD);
 	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
 }
 catch(PDOEception $e)
 {
 	die($e->getMessage()); 

 }


 try
 {
 	$db = new PDO ('mysql:host='.SERVER_NAME';dbname='.DB_NAME,DB_USER,DB_PASSWORD);
  	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
 	$db->exec('SET NAMES utf8');
 } //throw new exception
 */