<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\User;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class UserFixture implements FixtureInterface
{
	public function load(ObjectManager $manager)
	{
		$u = new User();
		$u->setName('John Smith');
		$u->setEmail('info#example.com');
		$u->setPlainPassword('mypassword');
		$u->setEnabled(1);
		$u->setRoles(['ROLE_SUPER_ADMIN']);

		$manager->persist($u);


		$manager->flush();
	}
}