<?php

   class example extends Database {

     public function __construct(){
           $this->getLink();
           echo $this->connected();
       }
      
   }
 
$example = new example();
  