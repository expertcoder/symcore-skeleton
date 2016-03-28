<?php

	function symcore_get_symfony_env()
	{
		$symfonyEnv = trim( getenv('SYMFONY_ENV') );

		if ( empty($symfonyEnv) )
		{
			trigger_error("The Symfony Environment must be available via getenv('SYMFONY_ENV')", E_USER_ERROR);
		}

		return $symfonyEnv;
	}

	function symcore_get_debug($symfonyEnv)
	{
		switch ($symfonyEnv)
		{
			/*
				NOTE:
					If you are changing this switch statement

			if changing any of these, you need to pay attention to
					config_dev.yml, config_beta.yml, config_prod.yml respectively
					and also Note which Bundles will only be included in debug mode in AppKernel.php
					Make sure there are no config settings which are invalid based on which bundles are included
			*/
			case 'dev':
				$debug = true;
				break;
			case 'beta':
				$debug = false;
				break;
			case 'prod':
				$debug = false;
				break;
			default:
				trigger_error("Unknown Symfony Environment '{$symfonyEnv}'", E_USER_ERROR);
		}

		return $debug;
	}