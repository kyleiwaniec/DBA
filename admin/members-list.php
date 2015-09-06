<?php
require_once('config.php');
// ACCESS TO THIS PAGE IS CONTROLLED
$uid = access_control();
$pagetitle = "Downtown Bordentown Association CMS";
require_once 'cms-header.php';
?>

<div class="wrapper">
    <div class="container">
        <div class="breadcrumb"></div>
    <div id="leftCol">
        <div class="borderBox">
    
    <p class="serif largest">MEMBERS</p>
    <hr/>
    <?php require_once 'cms-members-menu.php' ?>
        </div>
    </div>
        <div id="centerCol">
<!--            <img src="../images/cms-events-legend.png" alt="Legend"/><br/>-->
            <p class="serif largest title"> Members List</p>
           <hr/>
           <br/>
            <?php
            connect();
            
            // EVENTS 
  $query = mysql_query("SELECT * FROM `downtoz0_cms`.`members` ORDER BY `title` ASC");
  
  $rows = mysql_num_rows($query);
  
  
  if($rows > 0){
    // show data
    while($data = mysql_fetch_assoc($query)){
      
     
      $title = $data['title'];
      $hide = $data['hide'];

     
      $id = $data['id'];
      
      
      /*
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
      
      $monthString = $month_arr[(int)$month];
       
       */
       
      
      $greyBg = '';
      if($hide == 0){
          $hide = "hide";
          $greyBg = '';
      }else{
          $hide = "show";
          $greyBg = 'greyBg';
      }
      
      echo "
           <div class='listitem {$greyBg}'>
           
           <span class='member-name'><a href='edit-member.php?eid={$id}' title='Edit this Member'>{$title}</a></span>  
           <span class='utilities'>
           <div>
           <a href='edit-member.php?eid={$id}' title='Edit this Member' class='button'>edit</a>
           </div>
           <div>
           <form id='hide' method='post' action='submit-member.php'>
           <input type='hidden' name='id' value='{$id}' />
           <input type='submit' name='{$hide}' value='{$hide}'></form>
           </div>
           <div>
           <form id='hide' method='post' action='submit-member.php'>
           <input type='hidden' name='id' value='{$id}' />
           <input type='submit' name='delete' value='delete'></form>
           </div>
           </span>
           </div>
           <hr/>
           ";
    }
  }else{
    echo "There are no Members at this time";
  }
            
            
            disconnect();
                      
            ?>
            
            
        </div>
        <div id="rightCol">
<!--        <div class="borderBox">
            <span class="title">Find Member</span>
        </div>-->
        </div>
    </div>
</div>


<?php require_once 'cms-footer.php'; ?>