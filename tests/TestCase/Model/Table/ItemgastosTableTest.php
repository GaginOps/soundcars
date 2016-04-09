<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ItemgastosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ItemgastosTable Test Case
 */
class ItemgastosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ItemgastosTable
     */
    public $Itemgastos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.itemgastos',
        'app.gastos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Itemgastos') ? [] : ['className' => 'App\Model\Table\ItemgastosTable'];
        $this->Itemgastos = TableRegistry::get('Itemgastos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Itemgastos);

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
