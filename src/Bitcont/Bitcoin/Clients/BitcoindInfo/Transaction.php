<?php

namespace Bitcont\Bitcoin\Clients\BitcoindInfo;

use Bitcont\Bitcoin\Protocol\ITransaction;


class Transaction implements ITransaction
{

	/**
	 * Bitcoin transaction id.
	 *
	 * @var string
	 */
	protected $id;

	/**
	 * Transaction inputs.
	 *
	 * @var array of Input
	 */
	protected $inputs = array();

	/**
	 * Transaction outputs.
	 *
	 * @var array of Output
	 */
	protected $outputs = array();


	/**
	 * Returns transaction id.
	 *
	 * @return string
	 */
	public function getId()
	{
		return $this->id;
	}


	/**
	 * Returns transaction inputs.
	 *
	 * @return array
	 */
	public function getInputs()
	{
		return $this->inputs;
	}


	/**
	 * Returns transaction outputs.
	 *
	 * @return array
	 */
	public function getOutputs()
	{
		return $this->outputs;
	}
}

