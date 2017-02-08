<?php
namespace mkasberg\Printer;

set_include_path(__DIR__ . '/../src' . PATH_SEPARATOR . get_include_path());
require 'HelloPrinter.php';

function print_r($string)
{
    HelloPrinterTest::$printedString = $string;
}

class HelloPrinterTest extends \PHPUnit_Framework_TestCase
{
    public static $printedString;

    public function testPrintHello()
    {
        $oPrinter = new Printer();
        $oPrinter->printHello();
        $this->assertEquals(self::$printedString, 'Hello!');
    }
}
