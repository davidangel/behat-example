<?php
require('Greeter.php');
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context, SnippetAcceptingContext
{
    private $greeter;
    /**
     * @When /^I provide the name (.*)$/
     */
    public function iProvideTheName($name) {
        $this->greeter = new Greeter($name);
    }

    /**
     * @Then /^I should get (.*)$/
     */
    public function iShouldGet($string) {
        if ((string) $string !== $this->greeter->sayHello()) {
            throw new Exception(
                "Actual output is:\n" . $this->greeter->sayHello()
            );
        }
    }
}
