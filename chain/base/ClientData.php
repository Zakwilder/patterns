<?php
/**
 * @copyright Copyright (c) Sigma Ukraine
 * @package   ChainOfResponsibility
 */

/**
 * Class ClientData.
 *
 * @package Base
 * @author  Eugene Zakursky <Eugene.Zakursky@sigmaukraine.com>
 */
class ClientData
{
	/**
	 * Name.
	 *
	 * @var string
	 */
	public $name;

	/**
	 * E-mail.
	 *
	 * @var string
	 */
	public $email;

	/**
	 * Age.
	 *
	 * @var integer
	 */
	public $age;

	/**
	 * Constructor.
	 *
	 * @param string  $n Name.
	 * @param string  $e Email.
	 * @param integer $a Age.
	 */
	public function __construct($n, $e, $a)
	{
		$this->name = $n;
		$this->email = $e;
		$this->age = $a;
	}

}