<?php
/**
 * @copyright Copyright (c) Sigma Ukraine
 * @package   ChainOfResponsibility
 */

/**
 * Class AbstractValidator.
 *
 * @package Base
 * @author  Eugene Zakursky <Eugene.Zakursky@sigmaukraine.com>
 */
class AbstractValidator implements IValidator
{
	/**
	 * Validator.
	 *
	 * @var object
	 */
	protected $validator;

	/**
	 * Validate data.
	 *
	 * @param object $clientData Client data.
	 *
	 * @return mixed
	 */
	function validate($clientData)
	{

	}

	/**
	 * Set validator.
	 *
	 * @param object $validator Validator.
	 *
	 * @return mixed
	 */
	function setValidator($validator)
	{
		$this->validator = $validator;
	}

	/**
	 * Get validator.
	 *
	 * @return mixed
	 */
	function getValidator()
	{
		return $this->validator;
	}

}