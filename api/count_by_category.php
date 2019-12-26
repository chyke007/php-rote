<?php
class ApiCountByCat{
    public function __construct(){
        $handler = new Library();
        echo json_encode($handler->count_by_cat($_GET['category']));

    }

   
}

?>