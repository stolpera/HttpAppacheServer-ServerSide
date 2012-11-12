<?php
// get the "message" variable from the post request
// this is the data coming from the Android app
$message=$_POST["message"];
// specify the file where we will save the contents of the variable message
$filename="androidmessages.html";
// write (append) the data to the file
file_put_contents($filename,$message."<br />",FILE_APPEND);
// load the contents of the file to a variable
$androidmessages=file_get_contents($filename);
// display the contents of the variable (which has the contents of the file)
echo $androidmessages;
?>