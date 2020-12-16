<?php

class model{  

    var $con;
    var $logged;
    var $dbhost;
    var $dbuser;
    var $dbpass;
    var $dbname;
    var $dbport;

    function __construct() {
      
        $this->dbhost = 'localhost';
        $this->dbuser = 'root';
        $this->dbpass ='';
        $this->dbname ='eletricbilling';    
        $this->InitDB();

    }
    function InitDB(){
        $this->con = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass)  or die(mysqli_error($this->con));
        mysqli_select_db($this->con, $this->dbname) or die(mysqli_error($this->con));    
    }


    function query($query){

        return mysqli_query($this->con,$query);
    }
    function free_result($query){
        return mysqli_free_result($query);
    }
    function num_rows($query){
        return mysqli_num_rows($query);
    }
    function fetch_data($query){
        return mysqli_fetch_assoc($query);
    }


     public function login($post){
        $data=array();
       
       $query = $this->query('SELECT * FROM `client` where accountNumber = "'.$post['accountNumber'].'" and status = 1');


        if($this->num_rows($query)>0){
            while($yu = $this->fetch_data($query)){
                $data[] = $yu;
            }
           return true;
          
        }else{
            return false;
        }
    }

    public function admin_login($post){
        $data=array();
       
       $query = $this->query('SELECT * FROM `admin` where userName = "'.$post['userName'].'" and password ="'.$post['password'].'"');

        $fetch = mysqli_fetch_assoc($query);

        if($fetch != null){
            if($fetch['status'] == '1'){
                $_SESSION['admin'] = $fetch;
                 return true;
            }else{
                return false;
            }
        }
    }

    public function registerCostumer($post){
        try{
            $firstName = $post['firstName'];
            $lastName = $post['lastName'];
            $meterNumber = $post['meterNumber'];
            $accountNumber = $post['accountNumber'];
            $address = $post['address'];

             $query = $this->query("INSERT INTO `client`(`firstName`, `lastName`, `accountNumber`, `meterNumber`, `address`, `status`) VALUES ('{$firstName}','{$lastName}','{$meterNumber}','{$accountNumber}', '{$address}','1')");
        

         if($query){
            return true;
         }else{
            return false;
         }

        }catch(Exception $e){
            echo $e->getMessage();
        }
    }


     public function distribution($post){
        try{

            $charges = $post['charges'];
            $amount = $post['amount'];

             $query = $this->query("INSERT INTO `distributioncharge`(`distributionName`, `amount`, `status`) VALUES ('{$charges}','{$amount}', '1')");
        

         if($query){
            return true;
         }else{
            return false;
         }

        }catch(Exception $e){
            echo $e->getMessage();
        }
    }

    public function FCHcharge($post){
        try{

            $charges = $post['charges'];
            $amount = $post['amount'];

             $query = $this->query("INSERT INTO `fchcommuinticharge`(`fchName`, `amount`, `status`) VALUES ('{$charges}','{$amount}', '1')");
        

         if($query){
            return true;
         }else{
            return false;
         }

        }catch(Exception $e){
            echo $e->getMessage();
        }
    }

    
    public function generationCharge($post){

       
        try{

            $charges = $post['charges'];
            $amount = $post['amount'];

             $query = $this->query("INSERT INTO `generationcharges`(`generationName`, `amount`, `status`) VALUES ('{$charges}','{$amount}', '1')");
        

         if($query){
            return true;
         }else{
            return false;
         }

        }catch(Exception $e){
            echo $e->getMessage();
        }
    }

    public function governmentCharge($post){

        //var_dump($post);
        try{

            $charges = $post['charges'];
            $amount = $post['amount'];

             $query = $this->query("INSERT INTO `governmentcharge`(`governmentName`, `amount`, `status`) VALUES ('{$charges}','{$amount}', '1')");
        

         if($query){
            return true;
         }else{
            return false;
         }

        }catch(Exception $e){
            echo $e->getMessage();
        }
    }

       public function subsidydiscount($post){

        //var_dump($post);
        try{

            $charges = $post['charges'];
            $amount = $post['amount'];

             $query = $this->query("INSERT INTO `subsidydiscountcharge`(`subsidyName`, `amount`, `status`) VALUES ('{$charges}','{$amount}', '1')");
        

         if($query){
            return true;
         }else{
            return false;
         }

        }catch(Exception $e){
            echo $e->getMessage();
        }
    }

     public function universalCharge($post){

        //var_dump($post);
        try{

            $charges = $post['charges'];
            $amount = $post['amount'];

             $query = $this->query("INSERT INTO `universalcharge`(`universalName`, `amount`, `status`) VALUES ('{$charges}','{$amount}', '1')");
        

         if($query){
            return true;
         }else{
            return false;
         }

        }catch(Exception $e){
            echo $e->getMessage();
        }
    }

    public function vatandlocal($post){

        //var_dump($post);
        try{

            $charges = $post['charges'];
            $amount = $post['amount'];

             $query = $this->query("INSERT INTO `vatlocalcharge`(`vatLocalName`, `amount`, `status`) VALUES ('{$charges}','{$amount}', '1')");
        

         if($query){
            return true;
         }else{
            return false;
         }

        }catch(Exception $e){
            echo $e->getMessage();
        }
    }


    public function actDeactProcessModel($post){

    $statusValue = $post['statusValue'];
    $idValue = $post['idvalue'];

    if ($statusValue == 1){
        $statusValue = 0;
    }else{
        $statusValue = 1; 

    }

    $query = $this->query("UPDATE `client` SET status = '".$statusValue."' WHERE idClient = '".$idValue."'");


      if($query){
            return true;
        }else{
            return false;
        }
    }
    
    public function updateDetail($post){

        $idtoUpdate = $post['id'];
        $fNameUpdate =$post['fName'];
        $lNameUpdate =$post['lName'];
        $meterUpdate =$post['meterNumber'];
        $accountUpdate=$post['accountNumber'];
        $addressUpdate=$post['address'];

        $query = $this->query("UPDATE `client`
         SET  firstName= '".$fNameUpdate."',
         lastName='".$lNameUpdate."',
         accountNumber='".$accountUpdate."',
         meterNumber='".$meterUpdate."',
         address='".$addressUpdate."' 
         WHERE idClient = '".$idtoUpdate."'");

        if ($query){
            return true;
        }else{
            return false;
        }

    }
}

  $model = new model();

?>