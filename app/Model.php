<?php


class Model
{   
    #PDO
    private $pdo;

    protected $table = '';

    # function to connect to BD
    public function __construct(PDO $pdo){

        $this->pdo = $pdo;

    }

    # Read all items on DB and bring out
    public function getAll ()
    {
        $stm = $this->pdo->query("SELECT * FROM `$this->table`");
        $models = $stm->fetchAll(PDO::FETCH_OBJ);
        return $models;

    }

    # Read  items on DB by ID and bring out
    public function get ($id)
    {
        $stm = $this->pdo->prepare("SELECT * FROM `$this->table` WHERE id= ?");
        $stm->bindValue(1,$id);
        $stm->execute();
        $models = $stm->fetchAll(PDO::FETCH_OBJ);
        return $models;
        
    }

    # Store Datas on DB 

    public function store ($data)
    {
       
        $stm = $this->pdo->prepare("INSERT INTO $this->table (".implode(",",array_keys($data)).") VALUES(".implode(",",array_fill(0, count($data), "?")).") ");
        $i=1;
        foreach ($data as $key => $value) {
            $stm->bindValue($i,$value);
            $i++;
        }
        $stm->execute();
    }

    # Update Data on DB  by it's Own ID 
    public function update ($id, $data)
    {
        
    }

    public function delete ($id)
    {
        
    }




}



?>