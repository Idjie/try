<?php
    require_once '/xampp/htdocs/exam/models/customer.model.php';
class ControllerCustomer{
	static public function ctrAddCustomer($data){
	   	$answer = (new ModelCustomer)->mdlAddCustomer($data);
	}

	static public function ctrShowCustomerList(){
		$answer = (new ModelCustomer)->mdlShowCustomerList();
		return $answer;
	}
}
?>