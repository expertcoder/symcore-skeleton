<?php

namespace AppBundle\Form\FosUser;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends BaseType
{
	public function getParent()
	{
		return 'FOS\UserBundle\Form\Type\RegistrationFormType';
	}

	public function getBlockPrefix()
	{
		return 'app_user_registration';
	}
}