<?php 

class  Route {
    private $_uri = [];
    private $_method = [];
    private $_found = false;
    
    /**
     * Builds a collection of internal URL's to look for
     * @params  type $uri
    */
    public function add ($uri, $method = null){
        $this->_uri[] = '/'.trim($uri,'/');

        if($method != null){
            $this->_method[] = $method;
        }
    }


    /**
      * Makes the thing run
      */
    public function submit(){
         $uriGetParam = isset($_GET['uri']) ? '/'.$_GET['uri'] : '/';
        
        foreach($this->_uri as $key => $value){
           
            if(preg_match("#^$value$#",$uriGetParam)){
                $useMethod = $this->_method[$key];
                new $useMethod();
                $this->_found = true;
            }          
        }

        if($this->_found == false){
            new FourOFour();
        }
    }
}

?>