$(function() {

    $( "button:first" ).button({
      icons: {
        primary: "ui-icon-locked"
      },
    }).next().button({
      icons: {
        primary: "ui-icon-locked"
      }
    }).next().button({
      icons: {
        primary: "ui-icon-gear",
        secondary: "ui-icon-triangle-1-s"
      }
    }).next().button({
      icons: {
        primary: "ui-icon-gear",
        secondary: "ui-icon-triangle-1-s"
      },
    }).next().button({
    	icons: {
    		primary: "ui-icon-gear",
    		secondary: "ui-icon-triangle-1-s"

    	}
    });


	$('#body-inner01').hide();
	alert('ACCOUNTANT ONLY!!!!!!!!!!!');


	$("#payout").click(function(){
	    //alert('tables from accountant processing .. .. .. .. ..');
			$.ajax({
				type: "POST",
				url: "view_employeedata.php",
				data:{"employee_id": $("input[name='employee_id']").val(),
				      "mode_of_employment": $("input[name='mode_of_employment']").val(),
				      "classification_of_employee": $("input[name='classification_of_employee']").val(),
				      "picture": $("input[name='picture']").val(),
				      "fullname": $("input[name='fullname']").val(),
				      "mobile": $("input[name='mobile']").val(),
				      "username": $("input[name='username']").val(),
				      "password": $("input[name='password']").val()
				},
				success: function(data) {
					$("#employee").append(data);
					alert("sucess:"+ data);

				},
				error: function(data){
					alert("unsuccessful"+ data);

				}

			});



	});


	

});