<?php
require_once('config.php');
// ACCESS TO THIS PAGE IS CONTROLLED
$uid = access_control();
$pagetitle = "Downtown Bordentown Association CMS";
require_once 'cms-header.php';

function renderEvents($event_type) {
                    connect();

                    // EVENTS 
                    $events = mysql_query("SELECT * FROM `downtoz0_cms`.`events` WHERE `event_type` = '$event_type' ORDER BY `date` DESC");

                    $rows = mysql_num_rows($events);


                    if ($rows > 0) {
                        // show data
                        while ($data = mysql_fetch_assoc($events)) {


                            $title = stripslashes($data['title']);
                            $hide = $data['hide'];
                            $date = $data['date'];
                            $time = $data['time'];
                            $event_type = $data['event_type'];

                            $id = $data['id'];

                            // parse the date
                            $month_arr = array("", "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");

                            $pattern = "/(\d)(\d)(\d)(\d)(-)([0-9]+)(-)([0-9]+)/";
                            $month = "$6";
                            $day = "$8";
                            $year = "$1$2$3$4";

                            //$monthString = $month_arr[preg_replace($pattern, $month, $date)];
                            $month = preg_replace($pattern, $month, $date);
                            $day = preg_replace($pattern, $day, $date);
                            $year = preg_replace($pattern, $year, $date);

                            $monthString = $month_arr[(int) $month];

                            $greyBg = '';
                            if ($hide == 0) {
                                $hide = "hide";
                                $greyBg = '';
                            } else {
                                $hide = "show";
                                $greyBg = 'greyBg';
                            }




                            echo "<div class='listitem {$greyBg}'>
                                
                                <div class='eventDate'>{$monthString} {$day}, {$year}</div>   
                                <div class='listitem-title'><a href='edit-event.php?eid={$id}' title='Edit this event'>{$title}</a></div>  
                                <div class='utilities'>
                                    <div>
                                        <a href='edit-event.php?eid={$id}' title='Edit this event' class='button'>edit</a>
                                    </div>
                                    <div>
                                        <form id='hide' method='post' action='submit-event.php'>
                                        <input type='hidden' name='id' value='{$id}' />
                                        <input type='submit' name='{$hide}' value='{$hide}'>
                                        </form>
                                    </div>
                                    <div>
                                        <form id='delete' method='post' action='submit-event.php'>
                                        <input type='hidden' name='id' value='{$id}' />
                                        <input type='submit' name='delete' value='delete'>
                                        </form>
                                    </div>
                                </div>
                        </div>
                        <hr/>
                        ";
                        }
                    } else {
                        echo "There are no events scheduled at this time";
                    }


                    disconnect();
}

?>
<div class="wrapper">
    <div class="container">
        <div class="breadcrumb"></div>
        <div id="leftCol">
            <div class="borderBox">

                <p class="serif largest">EVENTS</p>
                <hr/>
                <?php require_once 'cms-events-menu.php' ?>
            </div>
        </div>
        <div id="centerCol">
<!--            <img src="../images/cms-events-legend.png" alt="Legend"/><br/>-->
            <p class="serif largest title"> Events List</p>
            <hr/>
            <br/>
            <div id='events-tabs'>
                <ul>
                    <li><a href='dba' class="burgundy-bg">DBA</a></li>
                    <li><a href='member' class="grey-bg">Members</a></li>
                    <li><a href='other' class="lime-bg">Other</a></li>
                </ul>
                <div id="dba">
                    <?php renderEvents('dba'); ?>
                </div><!-- #dba -->
                <div id="member">
                    <?php renderEvents('member'); ?>
                </div><!-- #member -->
                <div id="other">
                   <?php renderEvents('other'); ?>
                </div><!-- #other -->
            </div><!-- #events-tabs -->
            <script>
                var tabs = $( "#events-tabs ul");
                var tab = tabs.find("a");

                tab.each(function(){
                    var tablink = $(this).attr("href");

                    $(this).click(function(e){
                        e.preventDefault();
                        //$("#"+tablink+"").css({"display":"block"});
                        $("#"+tablink+"").fadeIn();
                        $(this).parent("li").addClass("current");
                        $(this).parent("li").siblings().removeClass("current");
                        $("#"+tablink+"").siblings("div").css({"display":"none"});
                        //$("#"+tablink+"").siblings("div").fadeOut();
                    });
                });
                // reveal the first tab onload       
                tab.first().click();
            </script>
        </div>
        <div id="rightCol">
            <!--        <div class="borderBox">
                        <span class="title">Find Event</span>
                    </div>-->
        </div>
    </div>
</div>


<?php require_once 'cms-footer.php'; ?>