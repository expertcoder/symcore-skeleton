##Symcore - Symfony 3 Skeleton Application

This Skeleton application come with common things setup that you would use with almost every project.
Simply fork this repository and then you can modify what you need.

This works well with my "SLAMP server" (https://github.com/expertcoder/slamp)

####Features

* FOSUserBundle
    * Bundle is already included
    * Bundle is setup to login with email only. Username has been disabled and removed from related forms.
    * Bundle configured for Twitter Bootstrap 3, with relevant twig templates overridden.
    * There is a base User.php which can easily be modified.
* Mailgun Mailer
    * MailgunBundle is already included.
    * Convenient propertys in parameters.yml.dist where you can enter Mailgun API keys.
* Twig Layout files
    * Twig layout file which includes common javascript/css files - bootstrap, jquery etc
    * Bootstrap 3 supported.
* Twig Extension.
* LadybugBundle is already included.
* Useful Phing tasks included.
* BaseController, BaseCommand and some helpful classes which you can modify to your liking.
* Optimisation of Symfony Environments
    * 3 different symfony environments available build - dev, beta and prod.
    * completed eliminated the need for app_dev.php. Instead, app.php can detect environment.
    * No need to pass in environment to console commands. eg no ````bin/console --env=ENV````


####TODO

* Improve Documentation.
* It would be nice to have a separate subdomain or port with some tools, such as Adminer, PhpMyAdmin, phpinfo etc. This server should be secure.
* pre install and configure gedmo/doctrine-extensions bundle?
* Autologin after signup?
* SymcoreBundle, which can be included with composer
    * Twig extension with some useful filters/test.
    * Friendly Exception with exception listener.
* ServicesAndReposTrait (ZH)
* AbstractActivity including Abstract server (ZH)
* Rename BaseController to AbstractController?


####TODO Ideas for Symapi Bundle
* Tailor FosUser actions for REST API (ZH)
* 
