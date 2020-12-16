<?php

 session_start();

class Controller{
	

	public function __construct(){

		

		if(isset($_GET['btn']))
		{		   
	       $button = $_GET['btn'];		   
		}

		switch($button)
		{

		    case 'login': 
				 	 $this->logins();	 	
		    break; 
		    case 'loginAdmin':
		    		$this->admin_logins();
		    break;
		    case 'registerClient':  	
		    		$this->registerCostumers();
		    break;	
		    case 'distribution':
		    		$this->distributions();
		    break;
		    case 'FCHcharges':
		    		$this->FCHcharges();
		    break;
		    case 'generation':
		    		$this->generationCharges();
		    break;
		    case 'governmentcharges':
		    		$this->governments();
		    break;
		    case 'subsidydiscount':
		    		$this->subsidydiscounts();
		    break;
		    case 'universal_Charges':
		    		$this->universalCharges();
		    break;
		    case 'vatandlocal_tax':
		    		$this->vatandlocal_taxes();
		    break;
		    case'actDeactPassToController':
		    		$this->actDeactProcess();
		    break;
		    case 'updateButton':
		    		$this->updateDetails();
		    break;


		}
	}


public function logins(){
	$data = array();
	

		include 'model.php'; 
		$query = $model->login($_POST);
		if($query){
			$data["status1"] = "Login Successfully";
		}else{
			$data['status1'] = "Login Failed";
		}	
	
	echo json_encode($data);
}


public function admin_logins(){
	$data = array();
	

		include 'model.php'; 
		$query = $model->admin_login($_POST);
		if($query){
			$data["status1"] = "Login Successfully";
		}else{
			$data['status1'] = "Login Failed";
		}	
	
	echo json_encode($data);
}

public function registerCostumers(){
	$data=array();
	include 'model.php'; 
	$query = $model->registerCostumer($_POST);

		if($query){
			$data["status1"] = "Added Successfully";
		}else{
			$data['status1'] = "Added Failed";
		}	
	
	echo json_encode($data);

}

public function distributions(){
	$data=array();
	include 'model.php'; 
	$query = $model->distribution($_POST);

		if($query){
			$data["status1"] = "Added Successfully";
		}else{
			$data['status1'] = "Added Failed";
		}	
	
	echo json_encode($data);

}

public function FCHcharges(){
	$data=array();
	include 'model.php'; 
	$query = $model->FCHcharge($_POST);

		if($query){
			$data["status1"] = "Added Successfully";
		}else{
			$data['status1'] = "Added Failed";
		}	
	
	echo json_encode($data);

}

public function generationCharges(){
	$data=array();
	include 'model.php'; 
	$query = $model->generationCharge($_POST);

		if($query){
			$data["status1"] = "Added Successfully";
		}else{
			$data['status1'] = "Added Failed";
		}	
	
	echo json_encode($data);

}

public function governments(){
	$data=array();
	include 'model.php'; 
	$query = $model->governmentCharge($_POST);

		if($query){
			$data["status1"] = "Added Successfully";
		}else{
			$data['status1'] = "Added Failed";
		}	
	
	echo json_encode($data);

}

public function subsidydiscounts(){
	$data=array();
	include 'model.php'; 
	$query = $model->subsidydiscount($_POST);

		if($query){
			$data["status1"] = "Added Successfully";
		}else{
			$data['status1'] = "Added Failed";
		}	
	
	echo json_encode($data);

}
public function universalCharges(){
	$data=array();
	include 'model.php'; 
	$query = $model->universalCharge($_POST);

		if($query){
			$data["status1"] = "Added Successfully";
		}else{
			$data['status1'] = "Added Failed";
		}	
	
	echo json_encode($data);

}

public function vatandlocal_taxes(){
	$data=array();
	include 'model.php'; 
	$query = $model->vatandlocal($_POST);

		if($query){
			$data["status1"] = "Added Successfully";
		}else{
			$data['status1'] = "Added Failed";
		}	
	
	echo json_encode($data);

}


// Act Deact Process

public function actDeactProcess(){
	$data=array();
	include 'model.php'; 
	$query = $model->actDeactProcessModel($_POST);

		if($query){
			$data["status1"] = "Process Succesfully";
		}else{
			$data['status1'] = "Process Failed";
		}	
	
	echo json_encode($data);
}

public function updateDetails(){
	$data=array();
	include 'model.php'; 
	$query = $model->updateDetail($_POST);

		if($query){
			$data["status1"] = "Process Succesfully";
		}else{
			$data['status1'] = "Process Failed";
		}	
	
	echo json_encode($data);
}
























































/*public function addGrave(){

		include '__ajaxModel.php';
		$data = array();
	        	$query = $model->addGrave($_POST);
				if($query){
				
					$data['status'] = "Successfully Updated";
				}else{
					$data['status'] = 'There was an error while inserting data';
				}
		echo json_encode($data);
	}




function cat_ids()
	{
		include '__ajaxModel.php';
		$error = false;
		$count=1;
		$lst = array();
		$data['results'] = $model->cat_ids($_POST);
		if($data['results']){
			foreach($data['results'] as $row)
			{	
				$lst[] = array('lotblock'=>$row['lot/block_no'], 'lotblock_id'=>$row['lot/blok_id'] );	
			}
		}
		echo json_encode($lst);
	}
	function lotblock()
	{
		include '__ajaxModel.php';
		$error = false;
		$count=1;
		$lst = array();
		$data['results'] = $model->lotblock($_POST);
		if($data['results']){
			foreach($data['results'] as $row)
			{	
				$lst[] = array('location_no'=>$row['location_no'], 'location_id'=>$row['location_id'] );	
			}
		}
		echo json_encode($lst);
	}

	public function reserve(){

		include '__ajaxModel.php';
		$data = array();
	        	$query = $model->reserve($_POST);
				if($query){
				
					$data['status'] = "Successfully Updated";
				}else{
					$data['status'] = 'There was an error while inserting data';
				}	
		echo json_encode($data);
	}*/

}

$contros = new Controller();
?>
