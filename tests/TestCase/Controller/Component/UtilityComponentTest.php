<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller\Component;

use App\Controller\Component\UtilityComponent;
use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Component\UtilityComponent Test Case
 */
class UtilityComponentTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Controller\Component\UtilityComponent
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
        $registry = new ComponentRegistry();
        $this->Utility = new UtilityComponent($registry);
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
