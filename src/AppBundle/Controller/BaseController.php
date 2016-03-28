<?php

namespace AppBundle\Controller;

use AppBundle\Other\ServicesAndReposTrait;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

abstract class BaseController extends Controller
{
	use ServicesAndReposTrait;
}