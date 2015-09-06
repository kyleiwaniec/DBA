<?php
$pagetitle = "Events Calendar";
require_once("header.php");
?>
<div class="pageTitle" style="text-align: center; padding-top:20px;"><img src="images/calOfEvents.png" alt=""/></div>
<div class="bigCalendarBg">
<div id="monthdropdown">
    <div id="prevMonth"><span>&laquo;</span></div>
    <div id="currMonth">
        <form method="post" id="month">
            <select class="choosemonth">
                <option value="1">January</option>
                <option value="2">February</option>
                <option value="3">March</option>
                <option value="4">April</option>
                <option value="5">May</option>
                <option value="6">June</option>
                <option value="7">July</option>
                <option value="8">August</option>
                <option value="9">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
            </select>
            <select class="chooseyear">
            </select>
        </form>
    </div>
    <div id="nextMonth"><span>&raquo;</span></div>
</div>            
<div class="bigCalContainer"></div> 

</div>
<div class="center" style="text-align: center; margin-top:-50px;"><img src="images/crier.png"/></div>
<script>
    $(function(){
    
    
        var theDate = new Date();
    
        var day = theDate.getDate(); // day of the month
        var month = theDate.getMonth() + 1;
        //alert(month);
        var year = theDate.getFullYear();
  
        var prev =      $("#prevMonth span");
        var next =      $("#nextMonth span");
        var currMon =   $("#currMonth");
    
  

        getCalendar(month, year);
       
    
        // populate the years dropdown select list
        for (var i = year; i < year+5; i++){
            $(".chooseyear").append("<option value="+i+">"+i+"</option>");
        }
        for (var i = year-1; i > year-3; i--){
            $(".chooseyear").prepend("<option value="+i+">"+i+"</option>");
        }
        
        
        
        // select current month on load:
        $(".choosemonth option").each(function(){
            var that = $(this);
  					
            if(that.val() == month){
                that.attr("selected", "selected");
            }
  				
        });
        
        // select current year on load:
        $(".chooseyear option").each(function(){
            var that = $(this);
  					
            if(that.val() == year){
                that.attr("selected", "selected");
            }
  				
        });
    
        // update calendar on month selection
        $(".choosemonth").bind("change", function(){
            var chosenyear = $(".chooseyear").val();
            var chosenmonth = $(this).val();
                    
            getCalendar(chosenmonth, chosenyear);
 
        });
        
        // update calendar on year selection
        $(".chooseyear").bind("change", function(){
            var chosenmonth = $(".choosemonth").val();
            var chosenyear = $(this).val(); 
            
            getCalendar(chosenmonth, chosenyear);
 
        });
          
          
       
          
        // go to the previous month and update calendar 
        prev.click(function(){
            var year = $(".chooseyear option:selected").val();
            
            if ($(".choosemonth option:selected").val() == 1){
                
                year--;
                // if no more years in options list, prepend another year
                if($(".chooseyear option:selected").index() == 0){
                   
                    $(".chooseyear").prepend("<option value="+year+">"+year+"</option>");
                }
                
                $(".chooseyear option").each(function(){
                    var that = $(this);
                    if(that.val() == year){
                        that.attr("selected", "selected");
                    }
                });
                
                
                $(".choosemonth option").last().attr("selected", "selected");
                $(".chooseyear").trigger("change");
            }else{
                $(".choosemonth option:selected").prev().attr("selected", "selected");;
                $(".chooseyear").trigger("change");
            }
            
            
            
      	
        }); 
        
        
        
        // go to the next month and update calendar
        next.click(function(){
            var year = $(".chooseyear option:selected").val();
            
            if ($(".choosemonth option:selected").val() == 12){
                
                // if no more years in options list, append another year
                year++;
                var numOfYears = $(".chooseyear option").length;
                if($(".chooseyear option:selected").index() == numOfYears-1){
                   $(".chooseyear").append("<option value="+ year +">"+ year +"</option>");
                }
                
                
                $(".chooseyear option").each(function(){
                    var that = $(this);
                    if(that.val() == year){
                        that.attr("selected", "selected");
                    }
                });
                
                $(".choosemonth option").first().attr("selected", "selected");
                $(".chooseyear").trigger("change");
            }else{
                $(".choosemonth option:selected").next().attr("selected", "selected");
                $(".chooseyear").trigger("change");
            }
    	
        }); 

        /* functions */

        function getCalendar(mt, yr){    
    
            $.post("bigCalendar.php", { getmonth: mt, getyear: yr },
            function(data){
                $(".bigCalContainer").css({"opacity":"0"});
                $(".bigCalContainer").html(data).animate({"opacity":"1"});
     						
            })
            // .success(function() { alert("second success"); })
            .error(function (xhr, ajaxOptions, thrownError){
                alert(xhr.status);
                alert(thrownError);
            })
            .complete(function() { 
                
                // highlight today
                if( $(".choosemonth option:selected").val() ==  month  &&  $(".chooseyear option:selected").val() ==  year){
                    $(".calendar").find("."+ day).parent("span").addClass("today");
                };
                          
                rowHeights();
                      
            });
        };
        function rowHeights(){
            $(".days").children("div").each(function(){

                var hgtsArr = [];
                var childs = $(this).children("span");
                            
                            
                childs.each(function(){
                    var hgt = $(this).height();
                    hgtsArr.push(hgt);
                });
                
                            
                function maxHgt(){
                    var max = hgtsArr[0];
                    for (var i = 0; i < hgtsArr.length; i++){
                        if( hgtsArr[i] > max){
                            max = hgtsArr[i];
                        }
                                    
                    }
                    //alert(max); 
                              
                    childs.height(max);
                }
                maxHgt();
                           
            }); 
        }  // end row heights fn    
    
    });
</script>


<?php
require_once("footer.php");
?>
