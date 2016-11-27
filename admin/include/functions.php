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
		$currentid = $lastid['lastid'];
		//echo $sqlselect;
		
		
		$sqlinsert = "INSERT INTO project_incompletes_q(projectid) VALUES('$currentid');INSERT INTO project_assembly(projectid) VALUES('$currentid');INSERT INTO project_services(projectid) VALUES('$currentid');";
		$save = $conn->prepare($sqlinsert);
		$save->execute();
		
		
		
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

if($_POST['action'] == "saveincomplete"){
		
		$conn = dbConnect();
		$projectid = $_POST['projectid'];
		$partnumber = $_POST['partnumber'];
		$partdescription = $_POST['partdescription'];
		$notes = $_POST['notes'];
		

		$sqlinsert = "INSERT INTO project_incompletes(projectid,partnumber,description,notes) VALUES('$projectid','$partnumber','$partdescription','$notes')";
		$save = $conn->prepare($sqlinsert);
		$save->execute();
		
		//get last id
		$sqlselect = "SELECT MAX(pdetailsid) AS lastid FROM project_incompletes WHERE projectid='$projectid'";
		$stmt = $conn->prepare($sqlselect);
		$stmt->execute();
		$lastid = $stmt->fetch(PDO::FETCH_ASSOC);
		echo $lastid['lastid'];
		
		
		//echo $sqlinsert;
		$conn = null;

	}
	
	if($_POST['action'] == "deleteincomplete"){
		$conn = dbConnect();
		$pdetailsid = $_POST['pdetailsid'];
		$sqldelete = "DELETE FROM project_incompletes where pdetailsid='$pdetailsid';";
		$delete = $conn->prepare($sqldelete);
		$delete->execute();
		$conn = null;

	}
	
	if($_POST['action'] == "saveexceptions"){
		//echo $_POST['action'];
		$conn = dbConnect();
		$projectid = $_POST['projectid'];
		$authshipment = $_POST['authshipment'];
		$authsolution = $_POST['authsolution'];
		$authdate = $_POST['authdate'];
		$hardwarebox = $_POST['hardwarebox'];
		$authpackaged = $_POST['authpackaged'];
		$pmsee = $_POST['pmsee'];
		$pmsolution = $_POST['pmsolution'];
		$pmdate = $_POST['pmdate'];
		$pmexception = $_POST['pmexception'];
		$pmexsolution = $_POST['pmexsolution'];
		$pmexdate = $_POST['pmexdate'];

		$sqlupdate = "UPDATE  project_incompletes_q SET authshipment='$authshipment',authsolution='$authsolution',authdate='$authdate',hardwarebox='$hardwarebox',authpackaged='$authpackaged',pmsee='$pmsee',pmsolution='$pmsolution',pmdate='$pmdate',pmexception='$pmexception',pmexsolution='$pmexsolution',pmexdate='$pmexdate' WHERE projectid='$projectid';";
		$update = $conn->prepare($sqlupdate);
		$update->execute();

		$conn = null;
		echo $sqlupdate;

	}
	
	if($_POST['action'] == "saveassembly"){
		//echo $_POST['action'];
		$conn = dbConnect();
		$projectid = $_POST['projectid'];
		$faintegration = $_POST['faintegration'];
		$assemblynotes = $_POST['assemblynotes'];
		$q101 = $_POST['q101'];
		$q102 = $_POST['q102'];
		$q103 = $_POST['q103'];
		$q104 = $_POST['q104'];
		$q105 = $_POST['q105'];
		$q106 = $_POST['q106'];
		$q107 = $_POST['q107'];
		$q108 = $_POST['q108'];
		$q109 = $_POST['q109'];
		$q110 = $_POST['q110'];
		
		$q112 = $_POST['q112'];
		$q113 = $_POST['q113'];

		$sqlupdate = "UPDATE  project_assembly SET faintegration='$faintegration',assemblynotes='$assemblynotes',q101='$q101',q102='$q102',q103='$q103',q104='$q104',q105='$q105',q106='$q106',q107='$q107',q108='$q108',q109='$q109',q110='$q110',q112='$q112',q113='$q113' WHERE projectid='$projectid';";
		$update = $conn->prepare($sqlupdate);
		$update->execute();

		$conn = null;
		echo $sqlupdate;

	}
	if($_POST['action'] == "saveservices"){
		//echo $_POST['action'];
		$conn = dbConnect();
		$projectid = $_POST['projectid'];
		$servicename = $_POST['servicename'];
		$servicesnotes = $_POST['servicesnotes'];
		$q21 = $_POST['q21'];
		$q22 = $_POST['q22'];
		$q23 = $_POST['q23'];
		$q24 = $_POST['q24'];
		$q25 = $_POST['q25'];
		$q26 = $_POST['q26'];
		$q27 = $_POST['q27'];


		$sqlupdate = "UPDATE  project_services SET servicesname='$servicename',servicesnotes='$servicesnotes',q21='$q21',q22='$q22',q23='$q23',q24='$q24',q25='$q25',q26='$q26',q27='$q27' WHERE projectid='$projectid';";
		$update = $conn->prepare($sqlupdate);
		$update->execute();

		$conn = null;
		echo $sqlupdate;

	}
	
	
	
	
	
	
/* end of eform*/








































?>