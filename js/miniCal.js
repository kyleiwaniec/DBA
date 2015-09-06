/*
 *
 *
 * SIDE-BAR calendar
 * author: Kyle Hamilton
 * Feel free to borrow, but please give credit where credit is due: www.candpgeneration.com
 *
 */

$(function() {

var theDate = new Date();
var getm = theDate.getMonth();
calendar(getm);

                function calendar(m){
                    /*
                     * h = day of the week 0:Saturday, 1:Sunday... 6:Friday q = day of the
                     * month m = month 3: march - 12:Dec, 13: Jan, 14: Feb j = is the
                     * century k is the year of the century
                     */
                    var cal = $(".miniCalendar"); 
		 
		 
                    var h, q, m, j, k;
		
                    var year = theDate.getFullYear(); // Returns the month xxxx
		
                    //var m = theDate.getMonth(); // Returns the month (from 0-11)
                    //var m = 8; // september
		
                    m++; // the month (from 1-12)
		
                    if (m < 3 ) {
                        m+=12;
                        year--;
                    }

                    // getDay(); day of the week 0-6

                    q = 1; // the first day of the month

                    j = year / 100;
                    k = year % 100;
		
                    j = Math.floor(j);
                    //alert(j);

                    h = (q + Math.floor((26 * (m + 1) / 10)) + k + Math.floor(k / 4) + Math.floor(j / 4) + 5 * j) % 7; // day
		
                    h = Math.floor(h);
                    //alert(h);

                    // display the calendar

                    var displayMonth = ["", "", "", "March", "April", "May", "June",
                        "July", "August", "September", "October", "November",
                        "December", "January", "February" ];
		
                    var daysInMonth = [ 0, 0, 0, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31,
                        31, 28 ];
		
                    cal.append("<div class='month'>"+displayMonth[m]+" - At A Glance</div>");
		
		
                    var month = displayMonth[m];
                    // month.toString();
                    // var monthLength = month.length;
		
			
                    //$(".month").append(displayMonth[m]);
		
		

                    var dayofweek = [ "S", "M", "T", "W", "T", "F", "S" ];

                    cal.append("<div class='dayOfWeek'/>");
		
                    for (var i = 0; i < 7; i++) {

                        $(".dayOfWeek").append("<span class='day_of_week'>"+dayofweek[i]+ "</span>");

                    }

                    cal.append("<div class='days'/>");

                    var day = 1;
		
                    for (var i = 0; i < 7; i++) {
			
                        if (h == 0) { // compensate for the shift (below)
                            h += 7;
                        }
                        if (i < h - 1) { // shift the Saturday
                            $(".days").append("<span class='top day_"+i+"'/>");
				
				 
                        }else{
                            $(".days").append("<span class='top day_"+i+"'>"+ (day++) +"</span>");
                        }
                    }
                    $(".days").append("<br class='clear'/>");

                    if (m >= 13) {
                        year++;
                    }

                    outer: for (var i = 0; i < 6; i++) {

                        inner: for (var p = 0; p < 7; p++) {

                            $(".days").append("<span class='day_"+p+"'>"+ (day++) +"</span>");

                            if ((year % 4 == 0) && ((year % 100 != 0) || (year % 400 == 0)) && (m >= 13)) {

                                if (day > daysInMonth[m] + 1) {
                                    for(var i = 0; i<6-p; i++){
                                        $(".days").append("<span class='day_"+(p+i+1)+"'>&nbsp;</span>");
                                    }
                                    $(".days").append("<br class='clear'/>");
                                    break outer;
                                }

                            } else if (day > daysInMonth[m]) {
                                for(var i = 0; i<6-p; i++){
                                        $(".days").append("<span class='day_"+(p+i+1)+"'>&nbsp;</span>");
                                    }
                                    $(".days").append("<br class='clear'/>");
                                break outer;
                            }

                        }

                        $(".days").append("<br class='clear'/>");
                    }
                    // color the weekend days
                    var color = "#eeeeee";
                    $(".day_0, .day_6").css({"background-color":color}); 
	 
     
     // do AJAX request here to get the active days
     // return active days for current month
     
    
      $.get("events-incl-mini2.php", function(data){
          
          
          var content = $(data);
          var jWrap = $(".jWrap", content);
          
          //alert(data);
          
          jWrap.each(function(){
              
                    
                    
                    var that = $(this);
                    var jMonth = that.find(".jMonth").text().toLowerCase();
                   
                    
                    if (month.toLowerCase().indexOf(jMonth) >= 0){
                    
                    var jDay = that.find(".jDay").text();
                    
                    jDay = parseInt(jDay); // otherwise days with leading zeros don't show
                    
                    var jEvtTitle = that.find(".event-title").text();
                     //console.log(jMonth+" : "+jDay);
                    
                    
                    $(".miniCalendar .days span").each(function(){
                            if ($(this).text() == jDay && $(this).text() != 0){
                                $(this).addClass("activeDay").addClass("act_"+jDay);
                            }
                        });
                    } 
                   
                    
            }); 
            var bubble = $( document.createElement('div') ).addClass("bubble");
            var info = $( document.createElement('ul') ).addClass("miniCalInfo");
            var close = $( document.createElement('div') ).addClass("close");
            
            bubble.css({
                "width":170, 
                "top": 0, 
                "left": -170,
                "background-color": "#f8f7f4",
                "border":"1px solid lightgrey",
                "position":"absolute",
                "padding-left":10,
                "text-align":"left",
                "text-transform":"capitalize",
                "z-index":999
            });
            
            close.css({
                "width":20, 
                "height":20,
                "line-height":"18px",
                "top": 0, 
                "right": 0,
                "background-color": "#BD1E3F",
                "color":"white",
                "border-left":"1px solid lightgrey",
                "border-bottom":"1px solid lightgrey",
                "position":"absolute",
                "cursor":"poiter",
                "text-align":"center",
                "padding":0
            });
            
            
            $(".activeDay").live("click", function(){
                
                var that = $(this);
                var date = parseInt(that.text());
                
                
                
                
                //that.append("<div />");
                bubble.detach();
                info.html("");
                that.append(bubble);
                bubble.append(close);
                close.html("x");
                
                
                
                jWrap.each(function(){
                    var jw = $(this);
                    
                    var jMonth = jw.find(".jMonth").text().toLowerCase();
                    var id = jw.find(".id").val();
                    
                    if(month.toLowerCase().indexOf(jMonth) >= 0 && jw.find(".jDay").text() == date){
                        var t = jw.find(".jDay").parents(".dateBox").siblings(".text").find(".event-title").text();
                        //alert(t);
                        bubble.append(info);
                        info.append("<li><a href='event-details.php?eid="+id+"' class='burgundy'>"+jMonth +" "+ date +" - "+t+"</a></li><br/>");

                    }
                    
                });
               
                close.live("click", function(){
                    bubble.detach();
                })
                
                
            });
            bubble.mouseleave(function(){
                $(this).detach();
            });
           // 
        }); // end request
      
     

		
} // end calendar function	

     
//  				$(".choosemonth option").each(function(){
//  					var that = $(this);
//  					if(that.val() == getm){
//  						that.attr("selected", "selected");
//  					}
//  				
//  				});
//  				
///* **********************************************************************  	
//
//$.ajax({
//  statusCode: {
//    404: function() {
//      alert('page not found');
//    }
//  }
//});
//
//var chosenMonth = $(".choosemonth").val();
//
//$.post("events.php", { month: chosenMonth },
//   function(data){
//   	 $(".events").html(data);
//     //alert("Data Loaded: " + data);
//   });
//
//********************************************************************** */
//
//     
//                $(".choosemonth").change(function(){
//                    var chosenmonth = $(this).val();
//                        
//                    // Assign handlers immediately after making the request,
//                    // and remember the jqxhr object for this request
//                    //var jqxhr = $.get("dates1.html", function(data) {
//                            
//                    //    $(".events").html(data);
//                        //alert("success");
//                   // });
//                    
//                    
//
//					$.post("events.php", { month: chosenmonth },
//  						 function(data){
//  						 	 $(".events").html(data);
//     						//alert("Data Loaded: " + data);
//   					})
//                    
//                    
//                    // .success(function() { alert("second success"); })
//                    .error(function (xhr, ajaxOptions, thrownError){
//                        alert(xhr.status);
//                        alert(thrownError);
//                    })
//                    .complete(function() { 
//                        //alert("complete");
//                        $(".miniCalendar").html("");		
//                        calendar(chosenmonth);	
//                            
//                    });
//
//                    // perform other work here ...
//
//                    // Set another completion function for the request above
//                    // jqxhr.complete(function(){ alert("second complete"); });
//                        
//                        
//                        
//                        
//						 
//	 
//                });
//     
     
            });
