<?php

$month = $_POST[month];

switch ($month) {

	case 0:
	
	echo "January";
	break;
	
	case 1:
	
	echo "February";
	break;
	
	case 2:
	
	echo "March
			<div class='event'>
  			<p><span class='thismonth'>March</span>, <span class='day'>5</span></p>
  			<p><a href='http://candpgeneration.com' class='link'>candpgeneration.com</a></p>
			</div>

			<div class='event'>
 			 <p><span class='thismonth'>March</span>, <span class='day'>6</span></p>
 			 <p><a href='http://roberttherealtor.com' class='link'>roberttherealtor.com</a></p>
			</div>

			<div class='event'>
  			<p><span class='thismonth'>March</span>, <span class='day'>17</span></p>
  			<p><a href='http://google.com' class='link'>google.com</a></p>
			</div>
			";
	break;
	
	case 3:
	
	echo "April";
	break;

	default:
	echo "Whatever";
	break;

}