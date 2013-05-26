$(function() {
  //alert("users!!");
  $('#searchForm').hide();
  $('#forms_here').hide();
  $('#tablesHere').hide();
  $('#profiles').hide();
      $.ajax({
          type: "POST",
          url: "view_attendance.php",
          success: function(data) {
          $("#tbl_tbody_attendance").empty().append(data);
          },
          error: function(data){
            alert(JSON.stringify(data))
          }
        });

      $.ajax({
        type:"POST",
        url:"profile.php",
        succes:function(data){
          $("#profile").append(data);
        },
        error:function(data){

        }
      });

      /*$.ajax({
        type:"POST",
        url:"viewEmploymentHistory.php",
        succes:function(data){
          $("#profile").append(data);
        },
        error:function(data){

        }
      });*/


  $('#btn_searchEmp').click(function(){
     $("#searchForm").show();
     $("#search_btn").click(function(){
      var searchObj={"search":$("input[name='search']").val()};
    
      $.ajax({
        type: "POST",
        url: "search_employee.php",
        data: searchObj,
        success: function(data){
          $("#employee").empty().append(data);
         

        },
        error: function(data){
          alert(JSON.stringify(data));

        }


      });

     });

  });
  $('#ATTENDANCES').hide();
  $('#btn-time_in').click(function(){

    $('#ATTENDANCES').dialog({
      show: "blind",
      hide: "blind",
      resizable: false,
      modal: false,
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
                      "date_checked":$("input[name='date_checked']").val()
                    };
                    $.ajax({

                      type: "POST",
                      url: "add_attendance.php",
                      data: timeInObj,
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
                },
                

              });

               
              $(this).dialog("close");  
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
                    var timeOutObj = {
                      "time_out":$("input[name='time_out']").val(),
                      "remarks":$("select[name='remarks']").val()                   
                    };
                   
                    $.ajax({

                      type: "POST",
                      url: "time_out.php",
                      data: timeOutObj,
                      success: function(data){
                        // alert(JSON.stringify(data));
                        $(this).dialog("close");
                      },
                      error: function(data){
                        alert(JSON.stringify(data))
                        $(this).dialog("close");
                      }
                    });
                    $(this).dialog("close");
                  },
                  "close": function(){
                    $(this).dialog("close");
                  }
                },
                
              });
              $(this).dialog("close");

             },
            "close":function(){
              $(this).dialog("close");
            },

      },

    });

  });

  $('#profile_btn').click(function(){
    $('#profiles').show();
    /*$("#profiles").dialog({
          modal:false,
            show:"blind",
            hide:"blind",
            heigth:500,
            width:1000,
            dragable:true,
            resizable:false,
            modal: true,
            buttons:{
              "Cancel":function(){
              $(this).dialog("close");
              $(document.location.reload(true));
            }
          }

        });*/
        $.ajax({
          type:"POST",
          url:"profile.php",
          success:function(data){
            $("#myprofiles").append(data);
            
          },
          error:function(data){

          }
        })
      $('#profile_btn').click(function(){
        $(document.location.reload(true));
      });
  });

  $('#btn_addEmpHistory').click(function(){
    
      $('#empHistory').dialog({
      show: "blind",
      hide: "blind",
      width: "auto",
      buttons:{
            "Add History": function(){
              $('#timeOutForm').hide();
              $('#employmentHistoryForm').dialog({
                show: "bounce",
                hide: "blind",
                resizable: false,
                modal: true,
                width: "auto",
                buttons:{
                  "go":function(){
                    var empHistoryObj = {
                      "date_of_employment":$("input[name='date_of_employment']").val(),
                      "company_name":$("input[name='company_name']").val(),
                      "company_address":$("input[name='company_address']").val(),
                      "company_phone":$("input[name='company_phone']").val(),
                      "company_email":$("input[name='company_email']").val(),
                      "position":$("input[name='position']").val(),
                      "salary":$("input[name='salary']").val()
                    };
                    $.ajax({

                      type: "POST",
                      url: "addEmploymentHistory.php",
                      data: empHistoryObj,
                      success: function(data){
                        alert(JSON.stringify(data));
                        $(this).dialog("close");
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
                },
                

              });

               
              $(this).dialog("close");  
             },

            "close":function(){
              $(this).dialog("close");
            },

        },

      });

  });


});