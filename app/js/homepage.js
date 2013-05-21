$(function(){
alert('HOME');
	
$("#here-register").click(function(){
	$("#registration_form").dialog("open");

	});
		$("#registration_form").dialog({
					autoOpen:false,
					resizable: false,
					width:700,
					modal: true,
					show: "puff",
					hide: "explode",
					buttons:{
						"Register": function(){ 	


							var employeeObj = {

								"employee_id":$("input[name='employee_id']").val(),
								"mode_of_employment":$("input[name='mode_of_employment']").val(),
								"classification_of_employee":$("input[name='classification_of_employee']").val(),
								"picture":$("input[name='picture']").val(),
								"fullname":$("input[name='fullname']").val(),
								"mobile":$("input[name='mobile']").val(),
								"username":$("input[name='username']").val(),
								"password":$("input[name='password']").val()
							};



							$.ajax({

								type: "POST",
								url: "../app/addUser.php",
								data: employeeObj,
								success: function(data){
									alert("erererere");
									$( this ).dialog( "close" );
									},

								error: function(data){
									$( this ).dialog( "close" );
								}
							});		
									
					},
					Cancel:function(){
					$( this ).dialog( "close" );
				},

			},

		});

/*xxxxxxxxxxxxxxxxxxxxxxxxxxxlog-in-dialogxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx*/


	/*$("#login").click(function(){
	});
		$("#login_here").dialog({
					autoOpen:false,
					resizable: false,
					width:700,
					modal: true,
					show: "bounce",
					hide: "explode"
				
		});*/





});
