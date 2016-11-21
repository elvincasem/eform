<?php
	ob_start();
	session_start();
	require 'db_connection.php';

//logout user
	if($_GET['action'] == "logout"){
		ob_start();
		session_start();
		session_unset();
		session_destroy();
		//echo "Log";
		echo "loggedout";
	}

//list rows and columns sql
function selectListSQL($q){
	
	$conn = dbConnect();
	$stmt = $conn->prepare($q);
	$stmt->execute();
	$rows = $stmt->fetchAll();
	return $rows;
	$conn = null;
	
}
	
//return single value sql
function singleSQL($q){
	$conn = dbConnect();
	$stmt = $conn->prepare($q);
	$stmt->execute();
	$rows = $stmt->fetch();
	return $rows[0];
	$conn = null;
}



/* start of eform*/


//save requisition
	if($_POST['action'] == "saveproject"){
		//echo $_POST['action'];
		$conn = dbConnect();
		$projectname = $_POST['projectname'];
		$projectnumber = $_POST['projectnumber'];
		$projecttype = $_POST['projecttype'];
		$projectdate = $_POST['projectdate'];
		$signoff = $_POST['signoff'];

		$sqlinsert = "INSERT INTO project(projectname,projectnumber,projecttype,formdate,originator) VALUES('$projectname','$projectnumber','$projecttype','$projectdate','$signoff')";
		$save = $conn->prepare($sqlinsert);
		$save->execute();
		
		//echo $sqlinsert;
		//get last id
		$sqlselect = "SELECT MAX(projectid) AS lastid FROM project WHERE projectnumber='$projectnumber'";
		$stmt = $conn->prepare($sqlselect);
		$stmt->execute();
		$lastid = $stmt->fetch(PDO::FETCH_ASSOC);
		echo $lastid['lastid'];
		//echo $sqlselect;
		$conn = null;

	}
	//delete item
	if($_POST['action'] == "deleteproject"){
		$conn = dbConnect();
		$projectid = $_POST['projectid'];
		$sqldelete = "DELETE FROM project where projectid='$projectid';";
		$delete = $conn->prepare($sqldelete);
		$delete->execute();
		$conn = null;

	}

if($_POST['action'] == "getproject"){

		$conn = dbConnect();
		$projectid = $_POST['projectid'];
		$sqlselect = "SELECT * FROM project where projectid=$projectid";
		$stmt = $conn->prepare($sqlselect);
		$stmt->execute();
		$projectdetails = $stmt->fetch(PDO::FETCH_ASSOC);
		//echo $sqlselect;
		echo json_encode($projectdetails);
		//echo $sqlselect;
		$conn = null;
	}


/* end of eform*/








































?>