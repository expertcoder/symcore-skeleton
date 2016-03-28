<?php

namespace AppBundle\Other;

trait ServicesAndReposTrait
{

    /***********************************************
     *        Start Get services shortcuts
     **********************************************/

    /**
     * @return \Doctrine\ORM\EntityManager
     */
    protected function getEntityManager()
    {
        return $this->container->get('doctrine.orm.entity_manager');
    }

    /**
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router
     */
    protected function getRouter()
    {
        return $this->container->get('router');
    }

    /**
     * Add shortcuts to get new services here
     */

    /***********************************************
     *        End Get services shortcuts
     **********************************************/



    /***********************************************
     *        Start Get Repo Shortcuts
     **********************************************/

    /**
     * Add shortcut here to get repos, see example below
     */

    /**
     * @return \AppBundle\Repository\ExampleRepository
     */
//    protected function getExampleRepository()
//    {
//        return $this->getEntityManager()->getRepository('AppBundle:Example');
//    }
    /***********************************************
     *        End Get Repo Shortcuts
     **********************************************/
}