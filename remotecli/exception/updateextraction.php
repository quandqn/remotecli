<?php

/**
 * @package   AkeebaRemote
 * @copyright Copyright (c)2006-2017 Nicholas K. Dionysopoulos
 * @license   GNU General Public License version 3, or later
 * @version   $Id$
 */
class RemoteExceptionUpdateextraction extends RemoteException
{
	public function __construct($message = null)
	{
		$this->code = 116;
		if (empty($message))
		{
			$message = 'Error extarcting the update on the remote server';
		}
		parent::__construct($message);
	}
}