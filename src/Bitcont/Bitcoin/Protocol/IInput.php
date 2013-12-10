<?php

namespace Bitcont\Bitcoin\Protocol;


interface IInput
{

	/**
	 * Returns previous transaction.
	 *
	 * @return string
	 */
	public function getPreviousTransactionId();


	/**
	 * Returns transaction.
	 *
	 * @return ITransaction
	 */
	public function getTransaction();


	/**
	 * Returns source address.
	 *
	 * @return IAddress
	 */
	public function getAddress();


	/**
	 * Returns number of satoshis.
	 *
	 * @return int
	 */
	public function getValue();
}

