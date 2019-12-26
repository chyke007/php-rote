<?php
class ApiAll{
    public function __construct(){
        $handler = new Library();
        echo json_encode($handler->all());

    }

   
}

?>