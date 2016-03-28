<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @Assert\Length(max = 200)
	 * @ORM\Column(name="name", type="string", length=200, nullable=true)
	 */
	protected $name;

	public function __construct()
	{
		parent::__construct();
	}

	// http://stackoverflow.com/questions/8832916/remove-replace-the-username-field-with-email-using-fosuserbundle-in-symfony2
	public function setEmail($email)
	{
		$email = is_null($email) ? '' : $email;
		parent::setEmail($email);
		$this->setUsername($email);

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @return mixed
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @param mixed $name
	 */
	public function setName($name)
	{
		$this->name = $name;
	}

}