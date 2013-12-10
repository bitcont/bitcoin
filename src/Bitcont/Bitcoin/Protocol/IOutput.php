<?php

namespace Bitcont\Bitcoin\Protocol;


interface IOutput
{

	/**
	 * Returns transaction.
	 *
	 * @return ITransaction
	 */
	public function getTransaction();


	/**
	 * Returns destination address.
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

