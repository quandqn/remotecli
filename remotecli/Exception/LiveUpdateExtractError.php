<?php
/**
 * @package    AkeebaRemoteCLI
 * @copyright  Copyright (c)2006-2017 Nicholas K. Dionysopoulos
 * @license    GNU General Public License version 3, or later
 */


namespace Akeeba\RemoteCLI\Exception;


use RuntimeException;
use Throwable;

class LiveUpdateExtractError extends RuntimeException
{
	public function __construct($errorMessage, $code = 116, Throwable $previous = null)
	{
		$message = sprintf('Update package failed to extract with error ‘%s’', $errorMessage);

		parent::__construct($message, $code, $previous);
	}

}
