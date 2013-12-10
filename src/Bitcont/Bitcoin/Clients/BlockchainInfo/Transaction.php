<?php

namespace Bitcont\Bitcoin\Clients\BlockchainInfo;

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


//	/**
//	 * Returns transaction total input value.
//	 *
//	 * @return float
//	 */
//	public function getInputSum()
//	{
//		$value = 0;
//		foreach ($this->getInputs() as $input) {
//			$value += $input->getValue();
//		}
//		return $value;
//	}
//
//
//	/**
//	 * Returns transaction total output value.
//	 *
//	 * @return float
//	 */
//	public function getOutputSum()
//	{
//		$value = 0;
//		foreach ($this->getOutputs() as $output) {
//			$value += $output->getValue();
//		}
//		return $value;
//	}
//
//
//	/**
//	 * Returns transaction fee.
//	 *
//	 * @return float
//	 */
//	public function getFee()
//	{
//		return $this->getInputSum() - $this->getOutputSum();
//	}
}

