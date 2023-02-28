<?php
    require_once '/xampp/htdocs/exam/models/product.model.php';
class ControllerProduct{
	static public function ctrAddProduct($data){
	   	$answer = (new ModelProduct)->mdlAddProduct($data);
	}

	static public function ctrShowProductList(){
		$answer = (new ModelProduct)->mdlShowProductList();
		return $answer;
	}
}
?>