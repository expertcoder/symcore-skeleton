<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = [
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new AppBundle\AppBundle(),
            new FOS\UserBundle\FOSUserBundle(),
            new cspoo\Swiftmailer\MailgunBundle\cspooSwiftmailerMailgunBundle(),
            new Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle(), //TODO - This is really only needed for dev and beta, but putting here for the moment.
            new RaulFraile\Bundle\LadybugBundle\RaulFraileLadybugBundle(), //TODO - This is really only needed for dev and beta, but putting here for the moment.
        ];

        if ($this->isDebug()) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function getRootDir()
    {
        return __DIR__;
    }

    public function getCacheDir()
    {
        /**
         * Using the operating systems "RAM drive". This has a few advantages
         * - When using Vagrant/virtual box, this will make the cache folder avoid using the synced folder. This should
         *   be faster. Also under some circumstances there was a problem using "chmod" on the files over the synced folder
         * - The "RAM Drive" is much faster than a regular hard drive.
         *
         * see related script "bin/core-folder-permissions".
         */

        return '/dev/shm/symfony/cache';
    }

    public function getLogDir()
    {
        /**
         * TODO
         *
         * When storing the logs over the virtual box synced folder there was a problem.
         * For the moment using hte "RAM drive" for logs also.
         *
         * see related script "bin/core-folder-permissions".
         */

        return '/dev/shm/symfony/logs';

//        return dirname(__DIR__).'/var/logs';
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load($this->getRootDir().'/config/config_'.$this->getEnvironment().'.yml');
    }
}
