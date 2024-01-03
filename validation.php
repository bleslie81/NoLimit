<?php
    //include file
	require_once('db.php');
    // Create connection
	try{
	$conn = new mysqli($servername, $user, $password, $dbname);
	}catch(PDOException $e){
		$e->getMessage();
	}
    session_start();
    if(isset($_POST['login'])){
        $name = $_POST['formEmail'];
        $psw=sha1($_POST['formPsw']);
		// prepare and bind
		$stmt = $conn->prepare("SELECT * FROM usertable WHERE name = ? && password = ?");
		$stmt->bind_param("ss", $name, $psw);
		$stmt->execute();
		
		$stmt->bind_result($name, $password);
		$stmt->store_result();
        
        if($stmt->num_rows==1){
            $_SESSION['enter']++;
            $stmt->close();
            header('location:admin.php');
        }else{
            echo "Ejnye-bejnye, valami nem stimmel az adatokkal!";
        }
}
?>