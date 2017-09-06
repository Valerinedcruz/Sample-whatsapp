<?php
include("db.php");

/*
$target_dir = "Whatsapp";// specifying the folder
$target_file = $target_dir . basename($_FILES["file"]["name"]); 
$uploadOk = 1;

if ($uploadOk == 0) {
   echo "Sorry, your file was not uploaded. "; 

}  else {
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) // moving the uploaded file to folder
    {
      //  echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.<br>";
    } else {
      //  echo "Sorry, there was an error uploading your file.";
    }
}
$txt_file = fopen($target_file,"r"); // opening file
 $filedata=file($target_file);  
 $ar=explode("\n",$filedata);
 */
 $file=file_get_contents("_chatios.txt");
$ar=explode("\n",$file);
$arrlength = count($ar);
for($x = 0; $x < $arrlength; $x++)
{
$text=$ar[$x];
$text_date= explode(",", $text);
$msg= explode(": ", $text_date[1]);
//Getting the date ,name and message from the txt file.
//echo"<br><br>Date:".$text_date[0];
//echo"<br><br>Time:".$msg[0];
//echo"<br><br>Name:".$msg[1];
//echo"<br><br>Message:".$msg[2];
echo "<br>-----------------------</br>";
$date=$text_date[0];
$time=$msg[0];
$name=$msg[1];
$msg=$msg[2];
//$firstname = mysqli_real_escape_string($con, $name);
$sql= "INSERT INTO ios(Date, Time, Name, Message) VALUES ('$date', '$time', '$name', '$msg');";
if(mysqli_query($con,$sql))
{
	echo"";
}
}












?>