<?php
//Email send code here

if(isset($_POST['email_data'])){
	
	$msg = "User_Email = ".$_POST['email']."     Message : ".$_POST['message'];
	$sub=$_POST['subject'];
	
	try{
			if(mail("alamincse039@gmail.com",$sub,$msg)){  //receiver email,subject,message
			    
		$message= "send success";
	}else{
     	$messag="send failed";
	}
	}catch(Exception $e){
		$messag=$e->getMessage();
	}

}
?>