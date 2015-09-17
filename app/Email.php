<?php

namespace emailApp;

class Email {
	function validateEmail($email) {

		$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/';

		if (!preg_match($regex, $email)) {
			throw new \InvalidArgumentException("PLEASE ENTER VALID EMAIL ADDRESS.....");
		} else {
			return 1;
		}
	}
}