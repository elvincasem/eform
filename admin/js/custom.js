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
