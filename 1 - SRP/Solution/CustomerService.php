<?php

require "Customer.php";
require "CustomerRepository.php";
require "EmailServices.php";

class CustomerService
{
	function addCustomer(Customer $customer){
		if(!$customer->isValid())
			return "Invalid data!";

		$repository = new CustomerRepository();
		$repository->addCustomer($customer);

		$email = new EmailServices();
		$email->send("sample@mail.com", $customer->email, "Welcome!", "You're registered!")

		return "Customer registered!";
	}
}