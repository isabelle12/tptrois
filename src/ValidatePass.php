<?php
class ValidatePass{
	const MINLGT=6;
	const MAXLGT=20;
	public function ValidLength($pass){
		$passlength=strlen($pass);
		if($passlength>=self::MINLGT&&$passlength<=self::MAXLENGTH){
			return true;
		}
		else{return false;}
	}
}
?>