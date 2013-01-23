<?php

define('ROOT_PATH', realpath(dirname(__FILE__) . DIRECTORY_SEPARATOR .'..'. DIRECTORY_SEPARATOR));
set_include_path(ROOT_PATH . PATH_SEPARATOR . get_include_path());

require_once 'PHPUnit/TextUI/TestRunner.php';
require_once 'PHPUnit/Util/Filter.php';

if (!defined('PHPUnit_MAIN_METHOD')) {
  define('PHPUnit_MAIN_METHOD', 'MyClassTest::main');
}

/**
 * Class to organize all tests.
 *
 */
class MyClassTest extends PHPUnit_Framework_TestSuite {

  /**
   * Launches the TextUI test runner
   *
   * @return void
   * @uses PHPUnit_TextUI_TestRunner
   */
  public static function main() {
    PHPUnit_TextUI_TestRunner::run(self::suite());
  }

  /**
   * Sets up the fixture, for example, opens a network connection.
   * This method is called before a test is executed.
   *
   * @access protected
   */
  protected function setUp() {
  }

  /**
   * Tears down the fixture, for example, closes a network connection.
   * This method is called after a test is executed.
   *
   * @access protected
   */
  protected function tearDown() {
  }

  /**
   * Returns the test suite to be run
   *
   * @return PHPUnit_Framework_TestSuite
   */
  public static function suite() {
    $suite   = new PHPUnit_Framework_TestSuite();
    $dirname = dirname(__FILE__);

    $suite->addTestFile($dirname .'/Example.php');
    // Add other Selenium tests

    return $suite;
  }
}

// Call the main method if this source file is executed directly.
if (PHPUnit_MAIN_METHOD === 'MyClassTest::main') {
  MyClassTest::main();
}
