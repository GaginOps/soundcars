<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PerdidasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PerdidasTable Test Case
 */
class PerdidasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PerdidasTable
     */
    public $Perdidas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.perdidas',
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
        $config = TableRegistry::exists('Perdidas') ? [] : ['className' => 'App\Model\Table\PerdidasTable'];
        $this->Perdidas = TableRegistry::get('Perdidas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Perdidas);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
