<?php
class Library{

    
    private $DB_host = 'localhost';
    private $DB_user = 'root';
    private $DB_pass = "";
    private $DB_name = 'examination';
    private $DB_con = null;
    private $result = [];

    public function __construct(){
        
    
        try{
            $this->DB_con = new PDO("mysql:host={$this->DB_host};dbname={$this->DB_name}",$this->DB_user,$this->DB_pass);
            $this->DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        }catch(PDOEXCEPTION $e){
            echo $e->getMessage();
    
        }
      
    }

    public function all(){
       $stmt = $this->DB_con->query("Select cand_name,cen_name FROM candidates as c left join centers as cen on c.cen_id = cen.cen_id");
       
       while($row =  $stmt->fetch(PDO::FETCH_ASSOC)){
        $this->result []= $row['cand_name'] .','. $row['cen_name'];
    }

        return  [ 
            'status' => 'success',
            'description' => (empty($this->result) ? 'Empty Record' : 'Record fetched Successfully'),
            'data' => $this->result
        ];
         
    }

    public function list_by_cat($category){
     if($category){
         
        $stmt = $this->DB_con->prepare("Select * FROM categories as cat left join candidates as ca on cat.cat_id  = ca.cat_id WHERE cat.cat_name = ?");
        $stmt->execute([$category]);
            while($row =  $stmt->fetch(PDO::FETCH_ASSOC)){
                    $this->result[] = $row['cand_name'];
            }
            return  [ 
                'status' => 'success',
                'description' => (empty($this->result) ? 'Empty Record' : 'Record fetched Successfully'),
                'data' => $this->result
            ];
 
     }else{
        return  [ 
            'status' => 'failed',
            'description' => 'Empty Record! You must provide a category first'
        ];
     }
    }

    public function count_by_cat($category){
        if($category){
            
            $stmt = $this->DB_con->prepare("Select * FROM categories as cat left join candidates can on can.cat_id = cat.cat_id WHERE cat_name = ? ");
            $stmt->execute([$category]);
                
               return  [ 
                   'status' => 'success',
                   'data' => $stmt->rowCount()
               ];
    
        }else{
           return  [ 
               'status' => 'failed',
               'description' => 'Empty Record! You must provide a category first'
           ];
        }
       }
}

?>