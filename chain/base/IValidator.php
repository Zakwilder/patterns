<?php
/**
 * @copyright Copyright (c) Sigma Ukraine
 * @package   ChainOfResponsibility
 */

/**
 * Class _IValidator.
 *
 * @package Base
 * @author  Eugene Zakursky <Eugene.Zakursky@sigmaukraine.com>
 */
interface IValidator
{

	/**
	 * Validate data.
	 *
	 * @param object $clientData Client data.
	 *
	 * @return mixed
	 */
	function validate($clientData);

	/**
	 * Set validator.
	 *
	 * @param object $validator Validator.
	 *
	 * @return mixed
	 */
	function setValidator($validator);

	/**
	 * Get validator.
	 *
	 * @return mixed
	 */
	function getValidator();

}