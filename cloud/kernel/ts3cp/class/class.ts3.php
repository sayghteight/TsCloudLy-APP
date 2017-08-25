<?php

require_once '../lib/ts3.lib.php';
require_once '../../configuration.php';

class Teamspeak3_lib {
    
    public function Create_Server(){
        
    }
    
    
    public function Start_Server($sid){
    
    $tsAdmin = new ts3admin($ts3_ip, $ts3_queryport);
    if($tsAdmin->getElement('success', $tsAdmin->connect())) {
        
    $tsAdmin->login($ts3_user, $ts3_pass);
    if(isset($_POST['sid'])) {
        $sid = $tsAdmin->serverStart($_POST['sid']);
             echo '<script>alert(\'Servidor encendido\')</script>';
             echo "<script type='text/javascript'>
            window.location='../user.php';
            </script>";
        	} else {
        	    
             echo '<script>alert(\'No se ha podido encender\')</script>';
             
         echo "<script type='text/javascript'>
            window.location='../user.php';
            </script>";
        	}
	
	   
         }else{
	      echo 'Connection could not be established.';
         }
         
         
         if(count($tsAdmin->getDebugLog()) > 0) {
	     foreach($tsAdmin->getDebugLog() as $logEntry) {
		 echo '<script>alert("'.$logEntry.'");</script>';
	     }
    }
    }
    
    public function Stop_Server($sid){
        
    $tsAdmin = new ts3admin($ts3_ip, $ts3_queryport);
    if($tsAdmin->getElement('success', $tsAdmin->connect())) {
        
    $tsAdmin->login($ts3_user, $ts3_pass);
    if(isset($_POST['sid'])) {
        $sid = $tsAdmin->serverStop($_POST['sid']);
             echo '<script>alert(\'Servidor apagado\')</script>';
             echo "<script type='text/javascript'>
            window.location='../user.php';
            </script>";
        	} else {
        	    
             echo '<script>alert(\'No se ha podido apagar\')</script>';
             
         echo "<script type='text/javascript'>
            window.location='../user.php';
            </script>";
        	}
	
	   
         }else{
	      echo 'Connection could not be established.';
         }
         
         
         if(count($tsAdmin->getDebugLog()) > 0) {
	     foreach($tsAdmin->getDebugLog() as $logEntry) {
		 echo '<script>alert("'.$logEntry.'");</script>';
	     }
    }
}
    
    
    
    
    
    
    
    
    
    
}