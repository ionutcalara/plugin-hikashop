<?php

namespace Hikashop;


use Facebook\WebDriver\Exception\NoSuchElementException;
use Facebook\WebDriver\WebDriver;
use Facebook\WebDriver\WebDriverBy;
use Facebook\WebDriver\WebDriverExpectedCondition;
use Lmc\Steward\Test\AbstractTestCase;

/**
 * @group hikashop_quick_test
 */
class HikashopQuickTest extends AbstractTestCase
{

    public $runner;

    /**
     * @throws NoSuchElementException
     * @throws \Facebook\WebDriver\Exception\TimeOutException
     * @throws \Facebook\WebDriver\Exception\UnexpectedTagNameException
     */
    public function testGeneralFunctions() {
        $this->runner = new HikashopRunner($this);
        $this->runner->ready(array(
                'settings_check' => true,
            )
        );
    }

    /**
     * @throws NoSuchElementException
     * @throws \Facebook\WebDriver\Exception\TimeOutException
     * @throws \Facebook\WebDriver\Exception\UnexpectedTagNameException
     */
    public function testUsdPaymentBeforeOrderInstant() {
        $this->runner = new HikashopRunner($this);
        $this->runner->ready(array(
                'capture_mode'           => 'instant',
                'checkout_mode'          => 'before_order',
                'exclude_manual_payment' => false,
                'exclude_subscription'   => true,
            )
        );
    }
}