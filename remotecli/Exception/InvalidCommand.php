<?php
/**
 * @package    AkeebaRemoteCLI
 * @copyright  Copyright (c)2006-2017 Nicholas K. Dionysopoulos
 * @license    GNU General Public License version 3, or later
 */


namespace Akeeba\RemoteCLI\Exception;


use Exception;
use RuntimeException;

class InvalidCommand extends RuntimeException
{
	public function __construct($type, $code = 10, Exception $previous = null)
	{
		$message = sprintf('Invalid command ‘%s’.', $type);

		parent::__construct($message, $code, $previous);
	}

}
