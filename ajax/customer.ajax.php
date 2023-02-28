<?php
require_once "/xampp/htdocs/exam/models/customer.model.php";
require_once "/xampp/htdocs/exam/controllers/customer.controller.php";

class saveCustomer{
  
  public $cusname;
  public $custype;
  public $cusnum;
  public $cusadd;
  public $cusemail;
  

  public function saveCustomerRecord(){
 
  	$cusname = $this->cusname;
  	$custype = $this->custype;
  	$cusnum = $this->cusnum;
    $cusadd = $this->cusadd;
  	$cusemail = $this->cusemail;
  	

    $data = array("cusname"=>$cusname,
    	            "custype"=>$custype,
                  "cusnum"=>$cusnum,
                  "cusadd"=>$cusadd,
                  "cusemail"=>$cusemail);
      $answer = (new ControllerCustomer)->ctrAddCustomer($data);

  }
}

$save_customer = new saveCustomer();

$save_customer -> cusname = $_POST["cusname"];
$save_customer -> custype = $_POST["custype"];
$save_customer -> cusnum = $_POST["cusnum"];
$save_customer -> cusadd = $_POST["cusadd"];
$save_customer -> cusemail = $_POST["cusemail"];

$save_customer -> saveCustomerRecord();