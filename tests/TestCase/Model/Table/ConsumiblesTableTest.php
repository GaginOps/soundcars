<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ConsumiblesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ConsumiblesTable Test Case
 */
class ConsumiblesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ConsumiblesTable
     */
    public $Consumibles;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.consumibles',
        'app.perdida'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Consumibles') ? [] : ['className' => 'App\Model\Table\ConsumiblesTable'];
        $this->Consumibles = TableRegistry::get('Consumibles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Consumibles);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
