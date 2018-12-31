<?php
   $myfile = fopen("rsvp.txt", "a") or die("Unable to open file!");
   // Import form data
   $name = filter_input(INPUT_POST, 'name');
   $pNumber = filter_input(INPUT_POST, 'pNumber');
   $device = filter_input(INPUT_POST, 'device');
   $repair = filter_input(INPUT_POST, 'repair');


   $subject = "New Repair - ";
   $today = date("M,d,Y h:i:s A");
   $txt = $today." ".$pNumber." ".$device." ".$repair."\n".$name;





   //mail("jeremiah.holmes@hotmail.com", $subject, $today."\n".$txt);

   fwrite($myfile, $txt);
   fclose($myfile);
   header("Location: http://pxlkng.com/cellphoneUSA");
   die();
 ?>
