<?php

namespace AppBundle\Form\FosUser;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class ProfileType extends BaseType
{
	public function getParent()
	{
		return 'FOS\UserBundle\Form\Type\ProfileFormType';
	}

	public function getBlockPrefix()
	{
		return 'app_user_profile';
	}
}