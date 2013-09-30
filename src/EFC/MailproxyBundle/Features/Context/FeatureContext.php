<?php

namespace EFC\MailproxyBundle\Features\Context;

use Symfony\Component\HttpKernel\KernelInterface;
use Behat\Symfony2Extension\Context\KernelAwareInterface;
use Behat\MinkExtension\Context\MinkContext;

use Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

//
// Require 3rd-party libraries here:
//
//   require_once 'PHPUnit/Autoload.php';
//   require_once 'PHPUnit/Framework/Assert/Functions.php';
//

/**
 * Feature context.
 */
class FeatureContext extends MinkContext
                  implements KernelAwareInterface
{
    private $kernel;
    private $parameters;

    /**
     * Initializes context with parameters from behat.yml.
     *
     * @param array $parameters
     */
    public function __construct(array $parameters)
    {
        $this->parameters = $parameters;
    }

    /**
     * Sets HttpKernel instance.
     * This method will be automatically called by Symfony2Extension ContextInitializer.
     *
     * @param KernelInterface $kernel
     */
    public function setKernel(KernelInterface $kernel)
    {
        $this->kernel = $kernel;
    }

//
// Place your definition and hook methods here:
//
//    /**
//     * @Given /^I have done something with "([^"]*)"$/
//     */
//    public function iHaveDoneSomethingWith($argument)
//    {
//        $container = $this->kernel->getContainer();
//        $container->get('some_service')->doSomethingWith($argument);
//    }
//

    /**
     * @When /^I go to "(?P<page>[^"]+)" and enter "(?P<login>[^"]+)" and "(?P<password>[^"]+)" to browser password box$/
     */
    public function iGoToPageAndEnterLoginAndPasswordToBrowserPasswordBox($page, $login, $password)
    {
        //throw new PendingException();
        $this->getSession()->setBasicAuth($login, $password);
        $this->getSession()->visit($this->locatePath($page));
    }

    /**
     * @Given /^a clean browser session$/
     */
    public function aCleanBrowserSession()
    {
        $this->getSession()->reset();
        $this->getSession()->restart();
    }


}
