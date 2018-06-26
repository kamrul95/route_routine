
<?php

	$exist=false ;
	$users=fopen('checkuser.txt','r') or die('cannot open');
	
	if(isset($_REQUEST['email'])){
		$givenEmail=explode('@',$_REQUEST['email']);
		while(!feof($users)) {	
			$user=fgets($users);
			$data=explode(" ",$user);
			$userEmail=explode('@',$data[1]);

			if(trim($userEmail[0])==$givenEmail[0] && trim($userEmail[1])==$givenEmail[1]){
				echo "exist";
				$exist = true;
			}
		}
		if(!$exist)echo "ok";
		fclose($users);
	}

	if(isset($_REQUEST['name'])){
		$givenName=$_REQUEST['name'];
		while(!feof($users)) {	
			$user=fgets($users);
			$data=explode(" ",$user);
			if(trim($data[0])==$givenName){
				echo "exist";
				$exist = true;
			}
		}
		if(!$exist)echo "ok";
		fclose($users);
	}
	
?>