<?php

namespace AppBundle\Twig;

use AppBundle\Other\FootballPosition;
use AppBundle\Other\ImperialLength;
use AppBundle\Other\UsState;

class AppExtension extends \Twig_Extension
{
	public function getFilters()
	{
		return array();
	}

	public function getFunctions()
	{
		return array();
	}

	public function getTests()
	{
		return [
			'instanceof' =>  new \Twig_Function_Method($this, 'instanceofTest')
		];
	}

	/**
	 * Example usage in twig
	 *
	 * {% if app.user is instanceof('Symfony\\Component\\Security\\Core\\User\\User') %}
	 *
	 * @param $object
	 * @param $class
	 * @return bool
	 */
	public function instanceofTest($object, $class)
	{
		return $object instanceof $class;
	}

	public function getName()
	{
		return 'app_extension';
	}
}