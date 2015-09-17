<?php

namespace EmailApp;

class EmailTest extends \PHPUnit_Framework_TestCase {
	/**
	 *This test validates email-id according to Gmail standards.
	 *@test
	 */
	public function it_can_validate_emailId_address_according_to_gmail_standards_sample_one() {
		$email  = new Email();
		$result = $email->validate("shantanu3687@gmail.com");
		$this->assertEquals($result, true);
	}
	/**
	 *This test validates email-id according to Gmail standards.
	 *@test
	 */
	public function it_can_validate_emailId_address_according_to_gmail_standards_sample_two() {
		$emailId = new Email();
		$result  = $emailId->validate("shantanu3687patwardhan@yahoo.co.in");
		$this->assertEquals($result, true);
	}
	/**
	 *This function tests Email function Whether it throws InvalidArgumentException or not
	 *for Emaild starting with number 
	 *@test
	 *@expectedException InvalidArgumentException
	 */
	public function it_should_throw_InvalidArgumentException_for_emailId_starting_with_numbers() {
		$email  = new Email();
		$result = $email->validate("111shantanu3687@gmail.com");
	}
	/**
	 *This function tests Email function Whether it throws InvalidArgumentException or not
	 *for Emaild containing more number of at the rate signs.
	 *@test
	 *@expectedException InvalidArgumentException
	 */
	public function it_should_throw_InvalidArgumentException_for_emailId_containing_more_number_of_at_the_rate_signs() {
		$email = new Email();
		$email->validate("shantanu@@@3687@gmail.com");
	}
	/**
	 *This function tests Email function Whether it throws InvalidArgumentException or not
	 *for Emaild starting with special character.
	 *@test
	 *@expectedException InvalidArgumentException
	 */
	public function it_should_throw_InvalidArgumentException_for_emailId_starting_with_special_character() {
		$email = new Email();
		$email->validate("$###shantanu3687@gmail.com");
	}
	/**
	 *This function tests Email function Whether it throws InvalidArgumentException or not
	 *for Emaild which does not contain at the rate sign.
	 *@test
	 *@expectedException InvalidArgumentException
	 */
	public function it_should_throw_InvalidArgumentException_for_emailId_which_does_not_contain_at_the_rate_sign() {
		$email = new Email();
		$email->validate("shantanu3687gmail.com");
	}
	/**
	 *This function tests Email function Whether it throws InvalidArgumentException or not
	 *for Emaild which does not domain name.
	 *@test
	 *@expectedException InvalidArgumentException
	 */
	public function it_should_throw_InvalidArgumentException_for_emailId_which_does_not_contain_domain_name() {
		$email = new Email();
		$email->validate("shantanu3687@com");
	}

	/**
	 *This function tests Email function Whether it throws InvalidArgumentException or not
	 *for Emaild which contain empty string.
	 *@test
	 *@expectedException InvalidArgumentException
	 */
	public function it_should_throw_InvalidArgumentException_for_emailId_which_contain_empty_String() {
		$email = new Email();
		$email->validate("");
	}
	/**
	 *This function tests Email function Whether it throws InvalidArgumentException or not
	 *for Emaild which does not contain string.
	 *@test
	 *@expectedException InvalidArgumentException
	 */
	public function it_should_throw_InvalidArgumentException_for_emailId_which_does_not_contain_string() {
		$email = new Email();
		$email->validate(12345789);
	}
	/**
	 *This function tests Email function Whether it throws InvalidArgumentException or not
	 *for Emaild which contain last character of username as period.
	 *According to GMail - last character of username should be letter(a-z) or number.
	 *@test
	 *@expectedException InvalidArgumentException
	 */
	public function it_should_throw_InvalidArgumentException_for_emailId_which_contain_last_character_of_username_as_period() {
		$email = new Email();
		$email->validate("shantanu3687.@gmail.com");
	}
}
