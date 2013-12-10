<?php

namespace Bitcont\Bitcoin\Clients;

use Bitcont\Bitcoin\Protocol\IAddress;


interface IParser
{

	/**
	 * Returns address by id.
	 *
	 * @param string $id
	 * @return IAddress
	 */
	public function getAddress($id);


	/**
	 * Returns transaction.
	 *
	 * @param string $id
	 * @return ITransaction
	 */
	public function getTransaction($id);


	/**
	 * Returns transactions for given address ordered from the oldest.
	 *
	 * @param IAddress $address
	 * @return array of ITransaction
	 */
	public function getTransactions(IAddress $address);
}

