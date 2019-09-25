<?php

class App{
    /**
         *app sınıfın contructor sınıfı 
    */
    
    protected  $controller = 'home';
    protected  $method     = 'index';
    protected  $params     = [];
    

    public function __construct(){
        
        echo 'mvc uygulamamız başarıyla çalıştı ';
    }
    
}


?>