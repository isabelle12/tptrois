<?php
class ValidatePassTest Extends PHPUnit_Framework_testCase{
	public function testValidLength(){
		$valpass=new ValidatePass();
		$this->assertFalse($valpass->validLength('1234'));}
	}
	

?>