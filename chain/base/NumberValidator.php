<?php
/**
 * @copyright Copyright (c) Sigma Ukraine
 * @package   Yiitrn
 */

/**
 * Class NumberValidator
 *
 * @package
 * @author Eugene Zakursky <Eugene.Zakursky@sigmaukraine.com>
 */
class NumberValidator
{
	function validate($clientData)
	{
		if ($clientData->Age < 0 || $clientData->Age > 200) {
			throw new Exception('Age is incorrect');
		}
		$successor = $this->getValidator();

		if ($successor != null) {
			$successor->validate($clientData);
		}
	}

}