<?php

include('includes/dbconnection.php');
$timezone = date_default_timezone_get();
date_default_timezone_set($timezone);
$currenttime = strtotime(date("h:i A", time()));
$currentdate = date("n/j/yy");
$localtime = localtime();
$localtime_assoc = localtime(time(), true);
if($_POST['empid']) {


   $empid = $_POST['empid'];
   $adate = $_POST['adate'];
   $serv =  $_POST['serv'];
 $query=mysqli_query($con,"select * from tblemployee where Name='$empid' ");

//echo date("h:i A",$currenttime)." ".$currentdate;
//echo $adate." ". $localtime;
echo '<br>';
echo ' <legend>Select Time</legend>';


    while (    $row=mysqli_fetch_array($query)) {



    	
      $tStart = strtotime($row['TimeStart']);
    $tEnd = strtotime($row['TimeEnd']);
   // $testtime = strtotime('4:30 PM');

/*if ($adate == $currentdate && $currenttime < $testtime)
{
  echo 'No available time slots. Please try a different day.';
}
else
{*/
   $tNow = $tStart;


    $timearray = array();
    $timearraym = array();
    $timearraya = array();
    $dbarray = array();
    $datearray = array();

    while($tNow <= $tEnd ){

      //$timearray[] = strtotime(date("h:i A",$tNow));
      if(date("H",$tNow) < 12){
 
        // "Morning"
        $timearraym[] = strtotime(date("h:i A",$tNow));
 
      }elseif(date("H",$tNow) > 11 && date("H",$tNow) < 18){
 
        // "Afternoon"

        $timearraya[] = strtotime(date("h:i A",$tNow));
      }

     $tNow = strtotime('+30 minutes',$tNow);
    }

       

    $query2=mysqli_query($con,"select * from tblappointment where EmployeeName='$empid' and AptDate='$adate'");

    while ($row2=mysqli_fetch_array($query2)) {
        $dbarray[] = strtotime($row2['AptTime']);
    }

 echo '<div class="<div class="d-flex flex-row">';
        if (empty($dbarray))
        {

              echo '<strong>MORNING</strong><br>';
       
            
             foreach($timearraym as $time)
            {
              
                                
                   
       //echo '<input type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-sm btn-danger text-muted bg-light open-my-modal"  value="'.date("h:i A",$time).'" name="atime"  id="atime">';
                    echo '<input type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-sm text-white btn-danger custom-btn" style="margin:5px;background-color: #8B0000; border-color:#8B0000;"  data-time="'.date("h:i A",$time).'" data-emp = "'.$empid.'" data-serv = "'.$serv.'" value ="'.date("h:i A",$time).'" data-date = "'.$adate.'" name="atime"  id="atime">';
               
            }
      
            echo '<br><strong>AFTERNOON</strong><br>';
            //echo '<div class="btn-toolbar justify-content-between" role="toolbar" data-toggle="buttons">';
          
              foreach($timearraya as $time)
            {
                      //echo '<label class="btn btn-sm btn-danger text-muted bg-light  radio"><input type="radio" name="atime"  id="atime" value="'.date("h:i A",$time).'"  required="true" >'.date("h:i A",$time).'</label>';
                       // echo '<button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-sm btn-danger text-muted bg-light  ">'.date("h:i A",$time).'</button>';

      
                //echo '<input type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-sm btn-danger text-muted bg-light "  data-time="'.date("h:i A",$time).'" value ="'.date("h:i A",$time).'" name="atime"  id="atime">';
                   echo '<input type="button" data-toggle="modal" data-target="#exampleModal"  class="btn btn-sm text-white btn-danger custom-btn" style="margin:5px;background-color: #8B0000; border-color:#8B0000;" data-time="'.date("h:i A",$time).'" data-emp = "'.$empid.'" data-serv = "'.$serv.'" value ="'.date("h:i A",$time).'" data-date = "'.$adate.'" name="atime"  id="atime">';
        
        
           
            }
       
            
        }
        else
        {
              echo '<strong>MORNING</strong><br>';
            
           $cnt = 0;
             foreach($timearraym as $time)
            {
              
                                
            if (!in_array($time, $dbarray)) {
        
                  echo '<input type="button" data-toggle="modal" data-target="#exampleModal"  class="btn btn-sm text-white btn-danger custom-btn" style="margin:5px;background-color: #8B0000; border-color:#8B0000;" data-time="'.date("h:i A",$time).'" data-emp = "'.$empid.'" data-serv = "'.$serv.'" value ="'.date("h:i A",$time).'" data-date = "'.$adate.'" name="atime"  id="atime">';
       

                $cnt++;
            }
            
          }
          if ($cnt==0)
             {
                echo 'There are no available timeslots for morning.<br>';
             }

      
            echo '<br><strong>AFTERNOON</strong><br>';
            //echo '<div class="btn-toolbar justify-content-between" role="toolbar" data-toggle="buttons">';
          $cnt2=0;
              foreach($timearraya as $time)
            {
                      //echo '<label class="btn btn-sm btn-danger text-muted bg-light  radio"><input type="radio" name="atime"  id="atime" value="'.date("h:i A",$time).'"  required="true" >'.date("h:i A",$time).'</label>';
                       // echo '<button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-sm btn-danger text-muted bg-light  ">'.date("h:i A",$time).'</button>';
          if (!in_array($time, $dbarray)) {
             echo '<input type="button" data-toggle="modal" data-target="#exampleModal"  class="btn btn-sm text-white btn-danger custom-btn" style="margin:5px;background-color: #8B0000; border-color:#8B0000;" data-time="'.date("h:i A",$time).'" data-emp = "'.$empid.'" data-serv = "'.$serv.'" value ="'.date("h:i A",$time).'" data-date = "'.$adate.'" name="atime"  id="atime">';
       
            $cnt2++;
              }
           
            
            }
               if ($cnt2==0)
             {
                echo 'There are no available timeslots for afternoon.<br>';
             }
          
        }
    
      
echo '</div>';
   
      echo '<br>';

//}


  
     }

        }
  
?>
