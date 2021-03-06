<?php
/**
 * @package    AkeebaRemoteCLI
 * @copyright  Copyright (c)2006-2017 Nicholas K. Dionysopoulos
 * @license    GNU General Public License version 3, or later
 */


namespace Akeeba\RemoteCLI\Exception;


use Exception;
use RuntimeException;

class NoDownloadMode extends RuntimeException
{
	public function __construct($code = 32, Exception $previous = null)
	{
		$message = 'You must specify a download mode (http, curl or chunk).';

		parent::__construct($message, $code, $previous);
	}

}
