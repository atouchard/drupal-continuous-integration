<?php
require_once 'PHPUnit/Extensions/SeleniumTestCase.php';

class Example extends PHPUnit_Extensions_SeleniumTestCase
{
  protected function setUp()
  {
    $this->setHost("127.0.0.1");
    $this->setPort(4445);
    $this->setBrowser("*chrome");
    $this->setBrowserUrl("http://www.inserthtml.com/");
  }

  public function testMyTestCase()
  {
    $this->open("/");
    $this->type("xpath=(//input[@id='s'])[2]", "mobile");
    $this->click("css=#search > form > input[type=\"submit\"]");
    $this->waitForPageToLoad("30000");
    $this->verifyTextPresent("Creating a Mobile Web Application Part 1: Mobile Design");
  }
}

?>
