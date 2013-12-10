<?php

namespace Bitcont\Bitcoin\Clients\BitcoindInfo;

use Bitcont\Bitcoin\Protocol\IInput;


class Input implements IInput
{

	/**
	 * Previous transaction id.
	 *
	 * @var Transaction
	 */
	protected $previousTransactionId;

	/**
	 * Referenced transaction.
	 *
	 * @var Transaction
	 */
	protected $transaction;

	/**
	 * Source address.
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
	 * Returns previous transaction.
	 *
	 * @return string
	 */
	public function getPreviousTransactionId()
	{
		return $this->previousTransactionId;
	}


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
	 * Returns source address.
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

