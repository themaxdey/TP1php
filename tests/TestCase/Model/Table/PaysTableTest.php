<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PaysTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PaysTable Test Case
 */
class PaysTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PaysTable
     */
    public $Pays;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Pays'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Pays') ? [] : ['className' => PaysTable::class];
        $this->Pays = TableRegistry::getTableLocator()->get('Pays', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Pays);

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
