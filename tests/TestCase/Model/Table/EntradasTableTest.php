<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EntradasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EntradasTable Test Case
 */
class EntradasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EntradasTable
     */
    public $Entradas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.entradas',
        'app.productos',
        'app.empresas',
        'app.marcas',
        'app.ventas',
        'app.items',
        'app.ventatotales',
        'app.clientes',
        'app.carros',
        'app.telefonos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Entradas') ? [] : ['className' => 'App\Model\Table\EntradasTable'];
        $this->Entradas = TableRegistry::get('Entradas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Entradas);

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
