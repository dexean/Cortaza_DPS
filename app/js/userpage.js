$(function(){
	alert("sasaas");
	$('#attendance_forms').hide();
	$('#searchForm').hide();
	$('#ATTENDANCES').hide();
	$('#empDetails').hide();

	$('#ATTENDANCE').click(function(){

	    $('#ATTENDANCES').dialog({
	      show: "bounce",
	      hide: "blind",
	      resizable: false,
	      modal: true,
	      width: "auto",
	      buttons:{
	            "time in": function(){
	              $('#timeOutForm').hide();
	              $('#timeInForm').dialog({
	                show: "bounce",
	                hide: "blind",
	                resizable: false,
	                modal: true,
	                width: "auto",
	                buttons:{
	                  "go":function(){
	                    var timeInObj = {
	                      "time_in":$("input[name='time_in']").val(),
	                      "date_checked":$("input[name='date_checked']").val(),
	                      "remarks":$("select[name='remarks']").val()
	                    };
	                    $.ajax({

	                      type: "POST",
	                      url: "../app/add_attendance.php",
	                      data: timeInObj,
	                      success: function(data){
	                        $( this ).dialog( "close" );
	                        },

	                      error: function(data){
	                        $( this ).dialog( "close" );
	                      }
	                    });
	                    $( this ).dialog( "close" );
	                  },
	                  "close": function(){
	                    $( this ).dialog( "close" );
	                  }
	                },
	                

	              });

	               
	              $( this ).dialog( "close" );  
	             },

	            "time out":function(){
	              $('#timeInForm').hide();
	              $('#timeOutForm').dialog({
	                show: "bounce",
	                hide: "blind",
	                resizable: false,
	                modal: true,
	                width: "auto",
	                buttons:{
	                  "go":function(){
	                    var timelimit = setTimeout(function() {}, 10); ;
	                    var timeOutObj = {
	                      "time_out":$("input[name='time_out']").val()                    
	                    };
	                    $.ajax({

	                      type: "POST",
	                      url: "../app/time_out.php",
	                      data: timeOutObj,
	                      success: function(data){
	                        $( this ).dialog( "close" );
	                      },
	                      error: function(data){
	                        $( this ).dialog( "close" );
	                      }
	                    });
	                    $( this ).dialog( "close" );
	                  },
	                  "close": function(){
	                    $( this ).dialog( "close" );
	                  }
	                },
	                
	              });
	              $( this ).dialog( "close" );

	             },
	            "close":function(){
	              $( this ).dialog( "close" );
	            },

	    },

	  });

	});

});