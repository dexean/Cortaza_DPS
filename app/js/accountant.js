/*$(function() {

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

    	},
    });


	$('#body-inner01').hide();
	alert('ACCOUNTANT ONLY!!!!!!!!!!!');

});*/
$(function() {

    $('#Forms').hide();

});

function release_salary(id){
  var obj={'id':id};
  $('#payout_tbl').dialog({
    show:"blind",
    hide: "blind",
    resizable: false,
    modal: false,
    width: "auto",
    buttons:{
          "release now": function(){
            $('##release_salaryForm').dialog({
              show: "bounce",
              hide: "blind",
              resizable: false,
              modal: true,
              width: "auto",
              buttons:{
                "go":function(){
                  var releaseSalaryObj = {
                    "username_to_pay":$("input[name='username_to_pay']").val(),
                    "salary":$("input[name='salary']").val(),
                    "overtime_pay":$("input[name='overtime_pay']").val(),
                    "date_released":$("input[name='date_released']").val(),
                    "remarks":$("input[name='remarks']").val()
                  };
                  $.ajax({

                    type: "POST",
                    url: "release_salary.php",
                    data: releaseSalaryObj,
                    success: function(data){
                      $(this).dialog("close");
                      alert(JSON.stringify(data));
                      },

                    error: function(data){
                      alert(JSON.stringify(data));
                      $(this).dialog("close");
                    }
                  });
                  $(this).dialog("close");
                },
                "close": function(){
                  $(this).dialog("close");
                }
              }
                

            });  
            $(this).dialog("close");  
          },
  }


});

}
function confirm_employee(id){
  var confirm_data={'id':id};
  alert('Next function is to confirm');
  
  /*if(){

  }*/
}