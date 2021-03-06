<?php
/**
 * @package    AkeebaRemoteCLI
 * @copyright  Copyright (c)2006-2017 Nicholas K. Dionysopoulos
 * @license    GNU General Public License version 3, or later
 */


namespace Akeeba\RemoteCLI\Exception;


use Exception;
use RuntimeException;

class CannotDownloadFile extends RuntimeException
{
	public function __construct($message, $code = 105, Exception $previous = null)
	{
		parent::__construct($message, $code, $previous);
	}

}
