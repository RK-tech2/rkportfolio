<?php
//variable	setting

$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

//check input fields
if(empty($name)||empty($email)||empty($message)) 
{
	echo "please fill all the fields";     
}
else
{
	mail("bhaskarpaul328@gmail.com","Portfolio Message",$message,"Form:	$name <$email>");
	echo "<script type='text/javascript'>alert('your message sent successfully');
	window.history.go(-1);
	</script>";
}	
?>