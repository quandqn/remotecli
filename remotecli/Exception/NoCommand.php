<?php
/**
 * @package    AkeebaRemoteCLI
 * @copyright  Copyright (c)2006-2017 Nicholas K. Dionysopoulos
 * @license    GNU General Public License version 3, or later
 */


namespace Akeeba\RemoteCLI\Exception;


use Exception;
use RuntimeException;

class NoCommand extends RuntimeException
{
	public function __construct($code = 38, Exception $previous = null)
	{
		$message = 'You have not specified a valid command to run.';

		parent::__construct($message, $code, $previous);
	}

}