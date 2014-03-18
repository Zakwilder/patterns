<?php
/**
 * @copyright Copyright (c) Sigma Ukraine
 * @package   Yiitrn
 */

/**
 * Class EmptyValidator
 *
 * @package
 * @author Eugene Zakursky <Eugene.Zakursky@sigmaukraine.com>
 */
class EmptyValidator extends AbstractValidator
{

	function validate($clientData)
	{
		if ($clientData->Name == '') {
			throw new Exception('Name can not be empty.');
		}
		$successor = $this->getValidator();

		if ($successor != null) {
			$successor->validate($clientData);
		}
	}

}