$(function() {
                
    $("html").removeClass("no-js");
     

    
    var lw = 950; // layout width

    var w = $(window).width();
    var dw = $(document).width();
    var h = $(window).height();
    var dh = $(document).height();

    $(window).resize(function(){
        w = $(window).width();
        h = $(window).height();
    
        if(w < lw){
            $(".navigation").css({
                "top": 92, 
                "right" : -(lw - w)
                });
                
                $(".contact-join").css({
                "top": -1, 
                "right" : 50
                });
        }else{
    
            $(".tour").css({
                "top": 50, 
                "left" : (w - lw)/2
                }).fadeIn();
            $(".navigation").css({
                "top": 92, 
                "right" : (w - lw)/2
                });
                
                $(".contact-join").css({
                "top": -1, 
                "right" : (w - lw)/2 +50
                });
    
        }
    
    }).trigger("resize");

    $(".tour").click(function(){
        //location.href = "guided-tour.php";
    });  
   
   
     // subscribe to newsletter form
    var svalidator = $("form#subscribe").validate({
     
        rules: {
            ea: {
                required: true,
                email: true
            }
        },
        messages: {
                           
            ea: {
                required: "Enter email address."
            }
        },
                            
                            
        errorPlacement: function(label, element) {
            // position error label after generated textarea
            if (element.is("textarea, input")) {
                label.insertAfter(element);
            }else{
                label.insertAfter(element);
            }
                                
        }
		
    });
//    validator.focusInvalid = function() {
//        // put focus on tinymce on submit validation
//        if( this.settings.focusInvalid ) {
//            try {
//                var toFocus = $(this.findLastActive() || this.errorList.length && this.errorList[0].element || []);
//                if (toFocus.is("textarea")) {
//                    toFocus.filter(":visible").focus();
//                } else {
//                    toFocus.filter(":visible").focus();
//                }
//            } catch(e) {
//            // ignore IE throwing errors when focusing hidden elements
//            }
//        }
//    }
   
   
   
   // Contact form
$(".hidden").css({"display":"none"});
var contact = $("#contact");
var cvalidator = contact.validate({
         messages: {
                        email: "Please enter a valid email.",
                        FirstName: "Please enter your first name.",
                        LastName: "Please enter your last name.",
                        phone: "Please enter your phone number.",
                        notes: "Please enter a message."
          },
          submitHandler : function(){
            $.post("includes/send_regular.php",{
              first_name : $("#FirstName").val(),
              last_name : $("#LastName").val(),
              email : $("#email").val(),
              phone : $("#phone").val(),
              notes : $("#notes").val()
            }, function(data){
                 
                 if(data){
                 alert(data);
                 $("#contact input[type='text']").trigger('blur');
                 }else{
                 contact.hide();
                 $("#thanks").fadeIn();
                 $("#yourname").text($("#FirstName").val());
                 }
            });
          }
          ,
          errorPlacement: function(label, element) {
                        // position error label after generated textarea
                        if (element.is("textarea, input")) {
                            //label.insertAfter(element.next());
                            label.insertAfter(element);
                        }else{
                            label.insertAfter(element);
                        }
                                
                    }
        });
        
// CMS form validation
  
var cmsForm = $("#cmsForm");
var cmsvalidator = cmsForm.validate({
          rules: {
                // simple rule, converted to {required:true}
                title: {required: true}
          },
          
          messages: {
                        title: "A title is required."
          },
          errorPlacement: function(label, element) {
                        // position error label after generated textarea
                        if (element.is("textarea, input")) {
                            //label.insertAfter(element.next());
                            label.insertAfter(element);
                        }else{
                            label.insertAfter(element);
                        }
                                
                    }
        });
        // end cms form validation


/*
 *
 *
 * SLIDESHOW
 * author: Kyle Hamilton
 * For the full plugin go to: http://candpgeneration.com/toys/slideshow/cnp-slideshow-reveal.html
 * Feel free to borrow, but please give credit where credit is due: www.candpgeneration.com
 *
 */
   
   var sh = 400; // slideshow height
   var slideshow = $(".scrImgs"); // slideshow container element
   
   
   slideshow.css({height: sh, "position":"relative", "overflow":"hidden"});
   
   var images = ["townhall.jpg", 
                 "home-photo-06.jpg",
                 "tpaine.jpg",
                 "umbrellas2.jpg",
                 "fountain.jpg", 
                 "irises.jpg",
                 "home-photo-07.jpg",
                 "home-photo-09.jpg",
                 "clarabarton.jpg"];
             
   var numImages = images.length;
   
   var slides = [];
   
   // make a slide object
   function Slide(h, img){
        var slide = $("<div>", {
            css:{
                    position : "absolute",
                   
                    height   : h,
                    opacity  : 0,
                    background: "url(images/scroller/"+img+") center center no-repeat"
                }
            });
                return slide;
   };
   
   for(var i = 0; i < numImages; i++){
   
    slides.push(new Slide(sh, images[i]));
    
   }
   
   slideshow.html(slides[0]);
   slideshow.prepend(slides[1]);
   
   slides[0].css({opacity : 1});
   
   var dotheslide = function(){
       
       slideshow.children("div").first().animate({opacity : 1}, {queue:false});
       slideshow.children("div").last().animate({opacity : 0}, 800, function(){
           
            slides.push(slides[0]);
            slides.shift();
            slideshow.html(slides[0]);
            slideshow.prepend(slides[1]);

            slideshow.children("div").first().css({opacity : 1});
       });   
       
       
   }
   
   
   var inter;
   
   inter = setInterval (function(){
       dotheslide();
   }, 4000);
   

    function menu(){
        $(".navigation li").mouseenter(function(e){
            e.stopPropagation();
            
            var menu = $(this).children(".dd-members, .dd-history, .dd-about, .dd-events");
            
            $(this).children("a").addClass("active");
            
            menu.stop(true, true).delay(350).slideDown();
            //menu.show();
            menu.css({
                "z-index": 100
            });
            
            var ow;
            if(w < lw){
                ow = lw;
            }else{
                ow = w;
            }
            
            // TODO only if item has dd-menu, do overlay
            if(menu.length > 0){
                $(".overlay").css({
                    "width": ow, 
                    "height" : dh, 
                    "opacity": .5
                }).stop(true, true).delay(350).fadeIn(); 
            }else{
                $(".overlay").stop(true, true).fadeOut();
            }

        }).mouseleave(function(){
            $(this).children(".dd-box").stop(true, true).delay(150).slideUp().css({
                "z-index": 10
            });
            $(this).children("a").removeClass("active");
             
        });
         
        $(".navigation").mouseleave(function(){
            $(".overlay").stop(true, true).fadeOut();
        });
    }
    
    
    menu();
   
$(".dd-icon").click(function(){
       location.href = $(this).find("a").attr("href");
       
   });
 

 
$("#cmsForm").change(function(){
    
if($("input[name='hide']").attr("checked") == false){
    $("input[name='hide']").val("0");
}
if($("input[name='hide']").attr("checked") == true){
    $("input[name='hide']").val("1");
}

//if($("input[name='event_type']:checked").val() == "dba"){
//    //alert("dba selected");
//    $("input[name='feature']").removeAttr("disabled");
//}else{
//   $("input[name='feature']").attr({"disabled": true, "checked": false}); 
//}

if($("input[name='feature']").attr("checked")){
    //alert("dba selected");
    //$("input[name='bg']").removeAttr("disabled");
    
    // make it look good:
    $("#short_desc").addClass("featureHeight");
    $(".shortDescWrapper").css({"margin-left": 0});
    $("#feature-img").show();
    $("#countdown").parent("p").hide();
    $(".uploadImgWrapper").hide();

    
    
    // enable tinyMCE for short_desc:
    tinyMCE.execCommand('mceAddControl', false, 'short_desc');
    
    // add style *after* editor has been initialized
    $("#short_desc_ifr").contents().find("#tinymce").css({"background-color": "#dcd4c7"});

    
    
    
}else{
   $("input[name='bg']").attr({"disabled": true, "checked": false}); 
   // disable tinyMCE for short_desc
   $("#short_desc").removeClass("featureHeight");
   
    var OriginalString = $('#short_desc_ifr').contents().find('#tinymce').text();
    var StrippedString = OriginalString.replace(/(<([^>]+)>)/ig,"");
    
    //tinyMCE.execCommand('mceFocus', false, 'short_desc');  
    //tinyMCE.triggerSave();
    tinyMCE.execCommand('mceRemoveControl', false, 'short_desc');
    
    $("input[name='feature']").click(function(){
        $("#short_desc").val(OriginalString);
    });
    
    
    
   
   
   $("#countdown").parent("p").show();
   $(".uploadImgWrapper").show();
   $(".shortDescWrapper").css({"margin-left": 20});
   $("#feature-img").hide();
}



});

if($("input[name='feature']").attr("checked", false)){
    
    $("input[name='feature']").click(function(){
        //alert("clicked!");
        $("#image").val("");
        $("#deleteImg").click();
    });
}

// pagination
var urlParams = {};
        (function () {
            var e,
            a = /\+/g,  // Regex for replacing addition symbol with a space
            r = /([^&=]+)=?([^&]*)/g,
            d = function (s) { return decodeURIComponent(s.replace(a, " ")); },
            q = window.location.search.substring(1);

            while (e = r.exec(q))
                urlParams[d(e[1])] = d(e[2]);
        })();
        
$(".pageNums a").each(function(){
            if ($(this).text() == urlParams["page"]){
                $(this).addClass("currPage");
                $(this).siblings("a").removeClass("currPage");
            }else{
                $(this).filter(":first-child").addClass("currPage");
            }
        
        });

function countChars(element){
    var numOfChars = $(element).val().length;	
    $("#countdown").text(325 - numOfChars);	
    
};

// only execute function if the short_desc div exists
if($("#short_desc").length > 0){
countChars("#short_desc");
}

$("#short_desc").bind("keyup", function(){
    countChars(this);	
   
});

// Events gallery
$(".open-cb-iframe").colorbox({iframe:true, width:"960px", height:"730px", opacity:.65});


});


