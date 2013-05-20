$(function() {
  //alert("users!!");
  $('#searchForm').hide();
  $('#attendance_forms').hide();
  $("button:first").button({
    icons: {
      primary: "ui-icon-locked"
    }
  }).next().button({
    icons:{
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
    }
  });
  //$('#tables_attendance').hide();

      $.ajax({
          type: "POST",
          url: "view_attendance.php",
          success: function(data) {
          $("#tbl_attendance").append(data);
          },
          error: function(data){
            alert("error in adding attendance.....");
          }
        });

  $('#btn_searchEmp').click(function(){
     //alert('search');
     $("#searchForm").show();
     $("#search_btn").click(function(){
      var searchObj={"search":$("input[name='search']").val()};
    
      $.ajax({
        type: "POST",
        url: "search_employee.php",
        data: searchObj,
        success: function(data){
            console.log(JSON.stringify(data));
          $("#employee").append(data);
         

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
                      "date_checked":$("input[name='date_checked']").val()
                    };
                    $.ajax({

                      type: "POST",
                      url: "../CMS/add_attendance.php",
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
                      url: "../CMS/time_out.php",
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