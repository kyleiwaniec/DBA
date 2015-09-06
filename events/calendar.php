<?php       
require_once("header.php");

?>
<script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/scripts.js"></script>
<script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/miniCal.js"></script>
<div class="miniCalendarBg">
<!--        <form method="post" id="month">
            <select class="choosemonth">
                
                <option value="0">January</option>
                <option value="1">February</option>
                <option value="2">March</option>
                <option value="3">April</option>
                <option value="4">May</option>
                <option value="5">June</option>
                <option value="6">July</option>
                <option value="7">August</option>
                <option value="8">September</option>
                <option value="9">October</option>
                <option value="10">November</option>
                <option value="11">December</option>
            </select>
            </form>-->
            <div class="miniCalendar">
            </div>
</div>
            <div class="events">
                <div class="event">
                    <p><span class="thismonth">February</span>, <span class="day">1</span></p>
                    <p><a href="http://candpgeneration.com" class="link">candpgeneration.com</a></p>
                </div>

                <div class="event">
                    <p><span class="thismonth">February</span>, <span class="day">19</span></p>
                    <p><a href="http://roberttherealtor.com" class="link">candpgeneration.com</a></p>
                </div>



                <div class="event">
                    <p><span class="thismonth">February</span>, <span class="day">22</span></p>
                    <p><a href="http://google.com" class="link">candpgeneration.com</a></p>
                </div>
            </div>
   
<?php
$year = date("Y"); 

echo "<h1>" + $today + "</h1>";
?>

<?php       
require_once("footer.php");
?>
