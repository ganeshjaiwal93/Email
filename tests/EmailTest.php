<?php
namespace emailApp;
include dirname(__FILE__)."/../vendor/autoload.php";

class EmailTest extends \PHPUnit_Framework_TestCase {
	
	/**
	 *@test
	 */
	public function it_can_validate_email() {
		$object = new Email();
		$result = $object->validateEmail("shantanu3687@gmail.com");
		$this->assertEquals($result, 1);
	}
    /**
	 *@test
	 *
	 */
	public function it_can_validate_email_starting_with_number() {
		$object = new Email();
		$result = $object->validateEmail("111shantanu3687@gmail.com");
		$this->assertEquals($result, 1);
	}
	/**
	 *@test
	 * @expectedException InvalidArgumentException
	 */
	public function it_should_throgh_InvalidArgumentException_for_email_having_more_number_of_at_the_rate_sign() {
		$object = new Email();
		$object->validateEmail("shantanu...@3687@gmail.com");
	}
	/**
	 *@test
	 * @expectedException InvalidArgumentException
	 */
	public function it_should_throgh_InvalidArgumentException_for_email_starting_with_special_character() {
		$object = new Email();
		$object->validateEmail("$###shantanu3687@gmail.com");
	}
    /**
	 *@test
	 * @expectedException InvalidArgumentException
	 */
	public function it_should_throgh_InvalidArgumentException_for_email_which_does_not_having_at_the_rate_sign() {
		$object = new Email();
		$object->validateEmail("shantanu3687gmail.com");
	}
    /**
	 *@test
	 * @expectedException InvalidArgumentException
	 */
	public function it_should_throgh_InvalidArgumentException_for_email_which_does_not_having_domain_name() {
		$object = new Email();
		$object->validateEmail("shantanu3687@com");
	}
}