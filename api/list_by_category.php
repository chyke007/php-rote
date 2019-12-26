<?php
class ApiListByCat{
    public function __construct(){
        $handler = new Library();
        echo json_encode($handler->list_by_cat($_GET['category']));

    }

   
}

?>