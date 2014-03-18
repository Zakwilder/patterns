<?php
/**
 * @copyright Copyright (c) Sigma Ukraine
 * @package   ChainOfResponsibility
 */

/**
 * Index file.
 */
include ('base/IValidator.php');
include ('base/AbstractValidator.php');
include ('base/EmptyValidator.php');
include ('base/NumberValidator.php');
include ('base/EmailValidator.php');
include ('base/ClientData.php');

echo '<form method="POST">';
echo '<input type="text" name="name"><br/>';
echo '<input type="text" name="email"><br/>';
echo '<input type="text" name="age"><br/>';
echo '</form>';





