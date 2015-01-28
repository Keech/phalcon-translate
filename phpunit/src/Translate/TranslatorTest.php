<?php
namespace Test\Translate;
use Translate\Translator;

/**
 * Class TranslatorTest
 *
 * @package Test\Translate
 * @subpackage Test\Translate\TranslatorTest
 * @since   PHP >=5.4.28
 * @version 1.0
 * @author  Stanislav WEB | Lugansk <stanisov@gmail.com>
 *
 */
class TranslatorTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Init class object
     *
     * @var Translate
     */
    private $translate;

    /**
     * ReflectionClass
     *
     * @var \ReflectionClass
     */
    private $reflection;

    /**
     * Initialize testing object
     *
     * @uses Init
     * @uses \ReflectionClass
     */
    public function setUp()
    {
        $this->reflection       = new \ReflectionClass('Translate\Translator');
        $this->translate        = new Translator();
    }

    /**
     * Kill testing object
     *
     * @uses Init
     */
    public function tearDown()
    {
        $this->translate = null;
    }

    /**
     * @covers \Translate\Translator::setLanguage()
     */
    public function testSetLanguage() {

    }

    /**
     * @covers \Translate\Translator::assign()
     */
    public function testAssign() {

    }

    /**
     * @covers \Translate\Translator::translate()
     */
    public function testTranslate() {

    }
}
