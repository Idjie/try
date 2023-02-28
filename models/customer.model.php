<?php
    require_once '/xampp/htdocs/exam/models/connection.php';
    class ModelCustomer{
	static public function mdlAddCustomer($data){
		$db = new Connection();
		$pdo = $db->connect();
        try{
        	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->beginTransaction();

			$stmt = $pdo->prepare("INSERT INTO customer(cusname, custype, cusnum, cusadd, cusemail) VALUES (:cusname, :custype, :cusnum, :cusadd, :cusemail)");

			$stmt->bindParam(":cusname", $data["cusname"], PDO::PARAM_STR);
			$stmt->bindParam(":custype", $data["custype"], PDO::PARAM_STR);
			$stmt->bindParam(":cusnum", $data["cusnum"], PDO::PARAM_STR);
			$stmt->bindParam(":cusadd", $data["cusadd"], PDO::PARAM_STR);
			$stmt->bindParam(":cusemail", $data["cusemail"], PDO::PARAM_STR);
			$stmt->execute();			

		    $pdo->commit();
		    return "ok";
		}catch (Exception $e){
			$pdo->rollBack();
			return "error";
		}	
		$pdo = null;	
		$stmt = null;
	}

	static public function mdlShowCustomerList(){
		$stmt = (new Connection)->connect()->prepare("SELECT * FROM customer ORDER BY cusname");
		$stmt -> execute();
		return $stmt -> fetchAll();
		$stmt -> close();
		$stmt = null;
	}
}