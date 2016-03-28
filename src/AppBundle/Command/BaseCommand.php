<?php

namespace AppBundle\Command;

use AppBundle\Other\ServicesAndReposTrait;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;

abstract class BaseCommand extends ContainerAwareCommand
{
    use ServicesAndReposTrait;

    public function __get($property)
    {
        //small work around to make this class compatible with GetServicesAndReposTrait

        if ($property == 'container') {
            return $this->getContainer();
        } else {
            throw new \Exception('Object property not found.');
        }
    }
}
