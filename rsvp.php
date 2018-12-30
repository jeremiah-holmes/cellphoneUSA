<?php
//if (isset($_POST['submit']))  {
     $myfile = fopen("rsvps.txt", "a") or die("Unable to open file!");
     //Email information
     $name = filter_input(INPUT_POST, 'name');
     $pNumber = filter_input(INPUT_POST, 'pNumber');
     $device = filter_input(INPUT_POST, 'device');
     $repair = filter_input(INPUT_POST, 'repair');


     $subject = "NewRepair - ";
     $today = date("M,d,Y h:i:s A");
     $txt = $today." ".$name." ".$pNumber." ".$device." ".$repair."\n";





     //mail("jeremiah.holmes@hotmail.com", $subject, $today."\n".$txt);

     fwrite($myfile, $subject.$txt);
     fclose($myfile);
     header("Location: http://google.com/");



  // }

   die();
 ?>
