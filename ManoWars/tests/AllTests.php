<?php
/**
 * Static test suite.
 */
class AllTests extends PHPUnit_Framework_TestSuite
{
    /**
     * Constructs the test suite handler.
     */
    public function __construct ()
    {
        $this->setName('AllTests');
        
        $this->addTestSuite('MW_ManoTest');
    }
    /**
     * Creates the suite.
     */
    public static function suite ()
    {
        return new self();
    }
}

