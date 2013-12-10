<?php

namespace Bitcont\Bitcoin\Clients\BitcoindInfo;

use Bitcont\Bitcoin\Protocol\IOutput;


class Output implements IOutput
{

	/**
	 * Referenced transaction.
	 *
	 * @var Transaction
	 */
	protected $transaction;

	/**
	 * Destination address.
	 *
	 * @var Address
	 */
	protected $address;

	/**
	 * Number of satoshis.
	 *
	 * @var int
	 */
	protected $value;


	/**
	 * Returns transaction.
	 *
	 * @return Transaction
	 */
	public function getTransaction()
	{
		return $this->transaction;
	}


	/**
	 * Returns destination address.
	 *
	 * @return Address
	 */
	public function getAddress()
	{
		return $this->address;
	}


	/**
	 * Returns number of satoshis.
	 *
	 * @return int
	 */
	public function getValue()
	{
		return $this->value;
	}
}

