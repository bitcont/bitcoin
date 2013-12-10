<?php

namespace Bitcont\Bitcoin\Protocol;


interface ITransaction
{

	/**
	 * Returns transaction id.
	 *
	 * @return string
	 */
	public function getId();


	/**
	 * Returns transaction inputs.
	 *
	 * @return array of IInput
	 */
	public function getInputs();


	/**
	 * Returns transaction outputs.
	 *
	 * @return array of IOutput
	 */
	public function getOutputs();
}

