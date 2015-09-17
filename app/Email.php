<?php

namespace EmailApp;

/**
 * This function Validates email-ID according to Gmail standards.
 * This function can throw Exception for invalid Email-ID
 */

class Email {
	function validate($email) {

		$regex = '/^[_a-zA-Z-]+[_a-zA-Z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/';

		if (!preg_match($regex, $email)) {
			throw new \InvalidArgumentException("Please enter valid email address.");
		} else {
			return true;
		}
	}
}
