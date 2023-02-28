<?php
require_once "/xampp/htdocs/exam/models/product.model.php";
require_once "/xampp/htdocs/exam/controllers/product.controller.php";

class saveProduct{
  
  public $prodname;
  public $prodman;
  public $prodquan;
  public $prodmanadd;
  public $prodmanemail;
  

  public function saveProductRecord(){
 
  	$prodname = $this->prodname;
  	$prodman = $this->prodman;
  	$prodquan = $this->prodquan;
    $prodmanadd = $this->prodmanadd;
  	$prodmanemail = $this->prodmanemail;
  	

    $data = array("prodname"=>$prodname,
    	            "prodman"=>$prodman,
                  "prodquan"=>$prodquan,
                  "prodmanadd"=>$prodmanadd,
                  "prodmanemail"=>$prodmanemail);
      $answer = (new ControllerProduct)->ctrAddProduct($data);

  }
}

$save_product = new saveProduct();

$save_product -> prodname = $_POST["prodname"];
$save_product -> prodman = $_POST["prodman"];
$save_product -> prodquan = $_POST["prodquan"];
$save_product -> prodmanadd = $_POST["prodmanadd"];
$save_product -> prodmanemail = $_POST["prodmanemail"];

$save_product -> saveProductRecord();