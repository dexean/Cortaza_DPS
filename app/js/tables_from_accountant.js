$(document).ready(function() {
	//alert('tables from accountant processing .. .. .. .. ..');
	$('.payout_history').hide();
	$('.overtime_pays').hide();
	$('.attendance').hide();
	$('.insurances').hide();
	$('.employee').hide();
	$("#btn_payout").click(function(){
			$.ajax({
				type: "POST",
				url: "view_employeedata.php",
				data:{
				      "mode_of_employment": $("input[name='mode_of_employment']").val(),
				      "classification_of_employee": $("input[name='classification_of_employee']").val(),
				      "picture": $("input[name='picture']").val(),
				      "fullname": $("input[name='fullname']").val(),
				      "mobile": $("input[name='mobile']").val(),
				      "username": $("input[name='username']").val()
				},
				success: function(data) {
					$("#employees").html(data);

				},
				error: function(data){
				}

			});


			$('.employee').show();
			$('.payout_history').hide();
			$('.overtime_pays').hide();
			$('.attendance').hide();
			$('.insurances').hide();
	});
	//btn_view_payout,btn_view_payout_history,btn_overtime,btn_attendances,btn_insurances
	$("#btn_payout_history").click(function(){
			$(".payout_history").show();
			$('.overtime_pays').hide();
			$('.attendance').hide();
			$('.insurances').hide();
			$('.employee').hide();
	});
	$("#btn_overtime").click(function(){
			$.ajax({
				type:"POST",
				url:"viewOvertimeWork.php",
				data:{
						"fullname": $("fullname[name='fullname']").val(),
						"over_time_worked": $("over_time_worked[name='over_time_worked']").val(),
						"remarks": $("remarks[name='remarks']").val()
				},
				success: function(data){
					$("#overtime_pays").append(data);
				},
				error: function(data){
					alert(data);
				}
				//emp. id,emp. fullname,att. over_time_worked,att. remarks
			});

			$(".overtime_pays").show();
			$('.payout_history').hide();
			$('.attendance').hide();
			$('.insurances').hide();
			$('.employee').hide();
			$("#btn_overtime").click(function(){
				$(document.location.reload(true));
			});
	});
	$("#btn_attendance").click(function(){
			$.ajax({
				type:"POST",
				url:"viewAttendance.php",
				data:{
					"id":$("id[name='id']").val(),
					"fullname":$("fullname[name='fullname']").val(),
					"time_in":$("time_in[name='time_in']").val(),
					"time_out":$("time_out[name='time_out']").val(),
					"date_checked":$("date_checked[name='date_checked']").val(),
					"remarks":$("remarks[name='remarks']").val()
				},
				success: function(data){
					$('#attendance').append(data);
				},
				error: function(data){
					alert(data);
				}
			});
			$(".attendance").show();
			$('.payout_history').hide();
			$('.overtime_pays').hide();
			$('.insurances').hide();
			$('.employee').hide();
			$("#btn_attendance").click(function(){
				$(document.location.reload(true));
			});
	});
	$("#btn_insurances").click(function(){
		$(".insurances").show();
		$('.payout_history').hide();
		$('.overtime_pays').hide();
		$('.attendance').hide();
		$('.employee').hide();
	});



});