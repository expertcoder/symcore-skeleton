<?php

namespace AppBundle\Form\FosUser;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

abstract class BaseType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder->remove('username');  // we use email as the username, so dont show user name on forms
		$builder->add('name', TextType::class);

		//Add additional custom fields here
//		$builder->add('...', TextType::class);
	}
}