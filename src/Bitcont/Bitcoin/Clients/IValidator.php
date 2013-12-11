<?php

namespace Bitcont\Bitcoin\Clients;


interface IValidator
{

	/**
	 * Returns TRUE if address is a valid bitcoin address.
	 *
	 * @param string $address
	 * @return bool
	 */
	public function isValidAddress($address);
}

