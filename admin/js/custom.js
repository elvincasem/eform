
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

function saveincomplete(){
	

					var projectid = document.getElementById("projectid").value;
					var partnumber = document.getElementById("partnumber").value;
					var partdescription = document.getElementById("partdescription").value;
					var notes = document.getElementById("notes").value;
					
					
					
					$.ajax({
                    url: 'include/functions.php',
                    type: 'post',
                    data: {action: "saveincomplete", projectid: projectid, partnumber: partnumber,partdescription:partdescription,notes:notes},
                    success: function(response) {
						//console.log(response);
						var lastid = parseInt(response);
						var closeinc = document.getElementById("closeincomplete");
						$('#incompletestable').load(document.URL +  ' #incompletestable');
						//$('#incompletestable tr:last').after("<tr><td>"+partnumber+"</td><td>"+partdescription+"</td><td>"+notes+"</td><td><button class='btn btn-danger notification' id='notification' onClick='deleteincomplete("+lastid+")'><i class='fa fa-times'></i></button></td></tr>");
						closeinc.click();
						//var lastid = parseInt(response);
						//window.location.href = "projectdetails.php?id="+lastid;

						
                    }
                });

	
	
}

function deleteincomplete(id){
	
	var r = confirm("Are your sure you want to delete this detail?");
    if (r == true) {
        //alert ("You pressed OK!");
		$.ajax({
                    url: 'include/functions.php',
                    type: 'post',
                    data: {action: "deleteincomplete", pdetailsid: id},
                    success: function(response) {
						//location.reload();
						$('#incompletestable').load(document.URL +  ' #incompletestable');
                    }
                });
		
    } if(r == false) {
        //txt = "You pressed Cancel!";
		
    }
	
}


function saveexceptions(projectid){
	
					
					if(document.getElementById("authyes").checked==true){
						var authshipment = "YES";
					}else{
						var authshipment = "NO";
					}
					//var authshipment = document.getElementById("authshipment").value;
					//var authshipment = $('#authshipment').this;
					var authsolution = document.getElementById("authsolution").value;
					var authdate = document.getElementById("authdate").value;
					if(document.getElementById("hardwareyes").checked==true){
						var hardwarebox = "YES";
					}else{
						var hardwarebox = "NO";
					}
					if(document.getElementById("authpackyes").checked==true){
						var authpackaged = "YES";
					}else{
						var authpackaged = "NO";
					}
					if(document.getElementById("pmseeyes").checked==true){
						var pmsee = "YES";
					}else{
						var pmsee = "NO";
					}
					
					var pmsolution = document.getElementById("pmsolution").value;
					var pmdate = document.getElementById("pmdate").value;
					if(document.getElementById("pmexceptionyes").checked==true){
						var pmexception = "YES";
					}else{
						var pmexception = "NO";
					}
					
					var pmexsolution = document.getElementById("pmexsolution").value;
					var pmexdate = document.getElementById("pmexdate").value;
					//alert (authshipment);
					
					$.ajax({
                    url: 'include/functions.php',
                    type: 'post',
                    data: {action: "saveexceptions",projectid: projectid, authshipment:authshipment,authsolution:authsolution,authdate:authdate,hardwarebox:hardwarebox,authpackaged:authpackaged,pmsee:pmsee,pmsolution:pmsolution,pmdate:pmdate,pmexception:pmexception,pmexsolution:pmexsolution,pmexdate:pmexdate},
                    success: function(response) {
						console.log(response);
						//var growlType = $(this).data('growl');

						$.bootstrapGrowl('<h4><strong>Success!</strong></h4> <p>Exceptions Saved!</p>', {
							type: 'success',
							delay: 3000,
							allow_dismiss: true,
							offset: {from: 'top', amount: 20}
						});
						//var lastid = parseInt(response);
						//window.location.href = "projectdetails.php?id="+lastid;

						
                    }
                });

	
	
}

function saveassembly(projectid){
	
					var faintegration = document.getElementById("faintegration").value;
					if(document.getElementById("q101yes").checked==true){
						var q101 = "YES";
					}if(document.getElementById("q101no").checked==true){
						var q101 = "NO";
					}if(document.getElementById("q101na").checked==true){
						var q101 = "NA";
					}
					
					if(document.getElementById("q102yes").checked==true){
						var q102 = "YES";
					}if(document.getElementById("q102no").checked==true){
						var q102 = "NO";
					}if(document.getElementById("q102na").checked==true){
						var q102 = "NA";
					}
					
					
					
					if(document.getElementById("q103yes").checked==true){
						var q103 = "YES";
					}if(document.getElementById("q103no").checked==true){
						var q103 = "NO";
					}if(document.getElementById("q103na").checked==true){
						var q103 = "NA";
					}
					
					if(document.getElementById("q104yes").checked==true){
						var q104 = "YES";
					}if(document.getElementById("q104no").checked==true){
						var q104 = "NO";
					}if(document.getElementById("q104na").checked==true){
						var q104 = "NA";
					}
					
					
					if(document.getElementById("q105yes").checked==true){
						var q105 = "YES";
					}if(document.getElementById("q105no").checked==true){
						var q105 = "NO";
					}if(document.getElementById("q105na").checked==true){
						var q105 = "NA";
					}
					
					
					if(document.getElementById("q106yes").checked==true){
						var q106 = "YES";
					}if(document.getElementById("q106no").checked==true){
						var q106 = "NO";
					}if(document.getElementById("q106na").checked==true){
						var q106 = "NA";
					}
					
					
					if(document.getElementById("q107yes").checked==true){
						var q107 = "YES";
					}if(document.getElementById("q107no").checked==true){
						var q107 = "NO";
					}if(document.getElementById("q107na").checked==true){
						var q107 = "NA";
					}
					
					
					if(document.getElementById("q108yes").checked==true){
						var q108 = "YES";
					}if(document.getElementById("q108no").checked==true){
						var q108 = "NO";
					}if(document.getElementById("q108na").checked==true){
						var q108 = "NA";
					}
					
					
					if(document.getElementById("q109yes").checked==true){
						var q109 = "YES";
					}if(document.getElementById("q109no").checked==true){
						var q109 = "NO";
					}if(document.getElementById("q109na").checked==true){
						var q109 = "NA";
					}
					
					
					if(document.getElementById("q110yes").checked==true){
						var q110 = "YES";
					}if(document.getElementById("q110no").checked==true){
						var q110 = "NO";
					}if(document.getElementById("q110na").checked==true){
						var q110 = "NA";
					}
					/*if(document.getElementById("q111yes").checked==true){
						var q111 = "YES";
					}if(document.getElementById("q111no").checked==true){
						var q111 = "NO";
					}if(document.getElementById("q112na").checked==true){
						var q111 = "NA";
					}*/
					if(document.getElementById("q112yes").checked==true){
						var q112 = "YES";
					}if(document.getElementById("q112no").checked==true){
						var q112 = "NO";
					}if(document.getElementById("q112na").checked==true){
						var q112 = "NA";
					}
					
					if(document.getElementById("q113yes").checked==true){
						var q113 = "YES";
					}if(document.getElementById("q113no").checked==true){
						var q113 = "NO";
					}if(document.getElementById("q113na").checked==true){
						var q113 = "NA";
					}
					
					var assemblynotes = document.getElementById("assemblynotes").value;
					
					$.ajax({
                    url: 'include/functions.php',
                    type: 'post',
                    data: {action: "saveassembly",projectid: projectid,faintegration:faintegration,assemblynotes:assemblynotes,q101:q101,q102:q102,q103:q103,q104:q104,q105:q105,q106:q106,q107:q107,q108:q108,q109:q109,q110:q110,q112:q112,q113:q113},
                    success: function(response) {
						console.log(response);
						//var growlType = $(this).data('growl');

						$.bootstrapGrowl('<h4><strong>Success!</strong></h4> <p>Assembly Saved!</p>', {
							type: 'success',
							delay: 3000,
							allow_dismiss: true,
							offset: {from: 'top', amount: 20}
						});
						//var lastid = parseInt(response);
						//window.location.href = "projectdetails.php?id="+lastid;

						
                    }
                }); 

	
	
}
function saveservices(projectid){
	
					var servicename = document.getElementById("servicename").value;
					
					
					if(document.getElementById("q21yes").checked==true){
						var q21 = "YES";
					}if(document.getElementById("q21no").checked==true){
						var q21 = "NO";
					}if(document.getElementById("q21na").checked==true){
						var q21 = "NA";
					}
					
					if(document.getElementById("q22yes").checked==true){
						var q22 = "YES";
					}if(document.getElementById("q22no").checked==true){
						var q22 = "NO";
					}if(document.getElementById("q22na").checked==true){
						var q22 = "NA";
					}
					
					
					
					if(document.getElementById("q23yes").checked==true){
						var q23 = "YES";
					}if(document.getElementById("q23no").checked==true){
						var q23 = "NO";
					}if(document.getElementById("q23na").checked==true){
						var q23 = "NA";
					}
					
					if(document.getElementById("q24yes").checked==true){
						var q24 = "YES";
					}if(document.getElementById("q24no").checked==true){
						var q24 = "NO";
					}if(document.getElementById("q24na").checked==true){
						var q24 = "NA";
					}
					
					
					if(document.getElementById("q25yes").checked==true){
						var q25 = "YES";
					}if(document.getElementById("q25no").checked==true){
						var q25 = "NO";
					}if(document.getElementById("q25na").checked==true){
						var q25 = "NA";
					}
					
					
					if(document.getElementById("q26yes").checked==true){
						var q26 = "YES";
					}if(document.getElementById("q26no").checked==true){
						var q26 = "NO";
					}if(document.getElementById("q26na").checked==true){
						var q26 = "NA";
					}
					
					
					if(document.getElementById("q27yes").checked==true){
						var q27 = "YES";
					}if(document.getElementById("q27no").checked==true){
						var q27 = "NO";
					}if(document.getElementById("q27na").checked==true){
						var q27 = "NA";
					}
					
					
					
					var servicesnotes = document.getElementById("servicesnotes").value;
					
					$.ajax({
                    url: 'include/functions.php',
                    type: 'post',
                    data: {action: "saveservices",projectid: projectid,servicename:servicename,servicesnotes:servicesnotes,q21:q21,q22:q22,q23:q23,q24:q24,q25:q25,q26:q26,q27:q27},
                    success: function(response) {
						console.log(response);
						//var growlType = $(this).data('growl');

						$.bootstrapGrowl('<h4><strong>Success!</strong></h4> <p>Services Saved!</p>', {
							type: 'success',
							delay: 3000,
							allow_dismiss: true,
							offset: {from: 'top', amount: 20}
						});
						//var lastid = parseInt(response);
						//window.location.href = "projectdetails.php?id="+lastid;

						
                    }
                }); 

	
	
}


$('.btn-growl').on('click', function(){
                var growlType = $(this).data('growl');

                $.bootstrapGrowl('<h4><strong>Notification</strong></h4> <p>Content..</p>', {
                    type: growlType,
                    delay: 3000,
                    allow_dismiss: true,
                    offset: {from: 'top', amount: 20}
                });

                $(this).prop('disabled', true);
            });