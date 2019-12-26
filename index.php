<?php
header('Content-Type: application/json'); 

    include 'api/library.php';
    include 'route.php';
    
    //SRC PAGES
    include 'src/home.php';
    include 'src/404.php';

    include 'api/all.php';
    include 'api/list_by_category.php';
    include 'api/count_by_category.php';


    $route = new Route();
    
    //WEB ROUTES
    $route->add('/','Home');
    
    //API ROUTES
    $route->add('/api/all','ApiAll');
    $route->add('/api/listbycat','ApiListByCat');
    $route->add('/api/countbycat','ApiCountByCat');
    $route->submit();

?>