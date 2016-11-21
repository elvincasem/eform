
//add project button

function addproject(){
	//alert('test');
			$('#updateproject').prop("disabled", true);    
			$('#saveproject').prop("disabled", false);    
			document.getElementById("projectname").value ="";
			document.getElementById("projectnumber").value="";
			document.getElementById("projectdate").value="";
			document.getElementById("signoff").value="";
}
	
			



//save project

function saveproject(){
	

					var projectname = document.getElementById("projectname").value;
					var projectnumber = document.getElementById("projectnumber").value;
					var projecttype = document.getElementById("projecttype").value;
					var projectdate = document.getElementById("projectdate").value;
					var signoff = document.getElementById("signoff").value;
					
					
					$.ajax({
                    url: 'include/functions.php',
                    type: 'post',
                    data: {action: "saveproject", projectname: projectname, projectnumber: projectnumber,projecttype:projecttype,projectdate:projectdate,signoff:signoff},
                    success: function(response) {
						console.log(response);
						var lastid = parseInt(response);
						window.location.href = "projectdetails.php?id="+lastid;

						
                    }
                });

	
	
}
function deleteproject(id){
	
	var r = confirm("Are your sure you want to delete this Project?");
    if (r == true) {
        //alert ("You pressed OK!");
		$.ajax({
                    url: 'include/functions.php',
                    type: 'post',
                    data: {action: "deleteproject", projectid: id},
                    success: function(response) {
						location.reload();
                    }
                });
		
    } if(r == false) {
        //txt = "You pressed Cancel!";
		
    }
	
}


function editproject(id){
	
	//$('#update').removeAttr("disabled");
	$('#updateproject').prop("disabled", false);    
	$('#saveproject').prop("disabled", true);    
	
	
	

	//alert(id);
	
	$.ajax({
		url: 'include/functions.php',
		type: 'post',
		data: {action: "getproject", projectid : id},
		success: function(response) {
			console.log(response);
			 var data = JSON.parse(response);
			 
			//insert values	
			document.getElementById("projectid").value = id;
			document.getElementById("projectname").value = data.projectname;
			document.getElementById("projectnumber").value = data.projectnumber;
			document.getElementById("projectdate").value = data.formdate;
			document.getElementById("signoff").value = data.originator;
			
			var projecttypevalue = data.projecttype;
			var proj = document.getElementById("projecttype");
			var opt = document.createElement("option");
			opt.value = data.projecttype;
			if(data.projecttype==""){
				opt.text = "";
			}else{
				opt.text = data.projecttype;
			}
			
			opt.selected = "selected";

			proj.add(opt,  proj.options[0]);
			
			
			
			return "valid";
		} 
	});
		
$('#updateequipment').prop("disabled", true); 	
	
	
}