<?php
/**
 * @copyright Copyright (c) Sigma Ukraine
 * @package   Yiitrn
 */

/**
 * Class EmailValidator
 *
 * @package
 * @author Eugene Zakursky <Eugene.Zakursky@sigmaukraine.com>
 */
class EmailValidator extends AbstractValidator
{
	function validate($clientData)
	{
		if (stristr($clientData->email, '@') === false) {
			throw new Exception('Email is incorrect');
		}
		$successor = $this->getValidator();

		if ($successor != null) {
			$successor->validate($clientData);
		}
	}

}