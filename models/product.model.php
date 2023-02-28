<?php
    require_once '/xampp/htdocs/exam/models/connection.php';
    class ModelProduct{
	static public function mdlAddProduct($data){
		$db = new Connection();
		$pdo = $db->connect();
        try{
        	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->beginTransaction();

			$stmt = $pdo->prepare("INSERT INTO product(prodname, prodman, prodquan, prodmanadd, prodmanemail) VALUES (:prodname, :prodman, :prodquan, :prodmanadd, :prodmanemail)");

			$stmt->bindParam(":prodname", $data["prodname"], PDO::PARAM_STR);
			$stmt->bindParam(":prodman", $data["prodman"], PDO::PARAM_STR);
			$stmt->bindParam(":prodquan", $data["prodquan"], PDO::PARAM_INT);
			$stmt->bindParam(":prodmanadd", $data["prodmanadd"], PDO::PARAM_STR);
			$stmt->bindParam(":prodmanemail", $data["prodmanemail"], PDO::PARAM_STR);
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

	static public function mdlShowProductList(){
		$stmt = (new Connection)->connect()->prepare("SELECT * FROM product ORDER BY prodname");
		$stmt -> execute();
		return $stmt -> fetchAll();
		$stmt -> close();
		$stmt = null;
	}
}