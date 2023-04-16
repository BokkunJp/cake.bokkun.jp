<?php
declare(strict_types=1);

namespace App\Test\TestCase\View\Helper;

use App\View\Helper\UtilityHelper;
use Cake\TestSuite\TestCase;
use Cake\View\View;

/**
 * App\View\Helper\UtilityHelper Test Case
 */
class UtilityHelperTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\View\Helper\UtilityHelper
     */
    protected $Utility;

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $view = new View();
        $this->Utility = new UtilityHelper($view);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Utility);

        parent::tearDown();
    }
}
