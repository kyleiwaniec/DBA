<?php
$pagetitle = "Events Calendar";
require_once("header.php");
?>
<div class="wrapper">
    <div class="container">
        <div class="breadcrumb">
                                        <img src="images/hand.png" alt="pointer" /><a href="/"title="home">HOME</a><a href="events.php" title="Events">EVENTS</a><span>CALENDAR</span>

        </div>
        <div id="leftCol">
            <div class="borderBox" style="height:268px;">
                <span class="title">OUR SPONSORS</span>
                <hr/>
               
            </div>
        </div>
        <div id="centerCol">
            <div class="borderBox">
                <?php  require_once 'feature-incl.php'; ?>
            </div>
        </div>
        <div id="rightCol">
            <div class="borderBox center" style="position:relative; height:268px; overflow:hidden;">
               
                <strong>Help promote <br/>
                    BORDENTOWN CITY<br/>
                    Share this page</strong>
                <br/>
                <br/>
                <!-- AddThis Button BEGIN -->
                <div style="position:relative; height:35px;">
                    <div style="position:absolute; top: 0; left:6px; width:155px;">
                        <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
                            <a class="addthis_button_facebook"></a>
                            <a class="addthis_button_twitter"></a>
                            <a class="addthis_button_email"></a>

                            <a class="addthis_button_compact"></a>
                            <!--<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>-->

                        </div>
                        <script type="text/javascript" src="https://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4f3e7d8d3c701092"></script></div>
                    <!-- AddThis Button END -->
                </div>
                   <a href="http://www.facebook.com/DowntownBordentownNJ" title="Visit Our Facebook Page">Visit Our Facebook Page</a>
                <br/> <br/> 
                <div id="ajaxresults"></div>
                <strong>SUBSCRIBE<br/>
                    To our e-Newsletter</strong><br/>
                <form name="ccoptin" action="http://visitor.r20.constantcontact.com/d.jsp" target="_blank" method="post" id="subscribe"> 
                    <input type="text" name="ea" placeholder="enter e-mail address" class="placeholder email ea"/><br/>
                <!--            <span class="fltlft"><input type="checkbox" id="openAddy" name="offline"/></span><span class="fltlft left small" style="width:130px; margin:5px 0 0 3px;"> I would like to receive printed materials in the mail.</span><br/>-->
                    <a href="http://www.constantcontact.com/jmml/email-marketing.jsp"><img src="https://imgssl.constantcontact.com/ui/images1/safe_subscribe_logo.gif" width="155" alt="Safe Subscribe"/></a><br/>

                    <input type="hidden" name="llr" value="e9mn6aeab">
                    <input type="hidden" name="m" value="1103837442884">
                    <input type="hidden" name="p" value="oi">
                    <input type="submit" name="go" value="submit"/>
                </form>
            </div>
        </div>
        <div class="calendar-head">
            <div class="fltlft">
                <br/>
                <span class="dba">DBA Event</span><span class="member">Member Event</span><span class="other">Other</span>
            </div>
            <div class="pageTitle">
                <img src="events/images/calOfEvents.png" alt="Calendar of Events" title="Calendar of Events"/>
            </div>

            <div class="fltrt">
                <br/>
                <a href="events.php">List View &nbsp;<img src="images/detail-view-icon.png" alt="List View"  align="middle"/></a>
            </div>
            
        </div>
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
<div class="center" style="text-align: center; margin-top:-50px;"><img src="events/images/crier.png"/></div>

</div><!-- .container -->
    <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
</div><!-- .wrapper -->
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
    
            $.post("events/bigCalendar_recurring.php", { getmonth: mt, getyear: yr },
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
