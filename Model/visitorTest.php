<?php

class UserTest 
{

	protected $user;

	public function setUp()
	{

		$this->user = new \Model\visitor;
		
	}
	public function testvisitor(){
	$user = new\Model\visitor;
	$user -> visitorlist(123);
	$this->assertEquals($user->visitorlist(), 123);
echo "Test Passed : 100%";


}
}
?>
