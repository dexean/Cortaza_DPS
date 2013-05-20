$(document).ready(function() {
	//alert('tables from accountant processing .. .. .. .. ..');
	$('.payout').hide();
	$('.payout_history').hide();
	$('.overtime_pays').hide();
	$('.attendance').hide();
	$('.insurances').hide();
	$('.employee').hide();
	$("#payout").click(function(){
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
			$('.payout').hide();
	});
	//btn_view_payout,btn_view_payout_history,btn_overtime,btn_attendances,btn_insurances
	$("#btn_view_payout").click(function(){
		$('.payout').show();
		$('.payout_history').hide();
		$('.overtime_pays').hide();
		$('.attendance').hide();
		$('.insurances').hide();
		$('.employee').hide();

	});
	$("#btn_view_payout_history").click(function(){
		$(".payout_history").show();
		$('.overtime_pays').hide();
		$('.attendance').hide();
		$('.insurances').hide();
		$('.employee').hide();
		$('.payout').hide();
	});
	$("#btn_view_overtime").click(function(){
		$(".overtime_pays").show();
		$('.payout_history').hide();
		$('.attendance').hide();
		$('.insurances').hide();
		$('.employee').hide();
		$('.payout').hide();

	});
	$("#btn_attendance").click(function(){
		$(".attendance").show();
		$('.payout_history').hide();
		$('.overtime_pays').hide();
		$('.insurances').hide();
		$('.employee').hide();
		$('.payout').hide();

	});
	$("#btn_insurances").click(function(){
		$(".insurances").show();
		$('.payout_history').hide();
		$('.overtime_pays').hide();
		$('.attendance').hide();
		$('.employee').hide();
		$('.payout').hide();
	});



});