<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RecrutorsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RecrutorsTable Test Case
 */
class RecrutorsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RecrutorsTable
     */
    public $Recrutors;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.recrutors',
        'app.schools',
        'app.school_types'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Recrutors') ? [] : ['className' => 'App\Model\Table\RecrutorsTable'];
        $this->Recrutors = TableRegistry::get('Recrutors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Recrutors);

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
