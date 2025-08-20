<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BlogSubcategoriesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BlogSubcategoriesTable Test Case
 */
class BlogSubcategoriesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BlogSubcategoriesTable
     */
    protected $BlogSubcategories;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.BlogSubcategories',
        'app.BlogPosts',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('BlogSubcategories') ? [] : ['className' => BlogSubcategoriesTable::class];
        $this->BlogSubcategories = $this->getTableLocator()->get('BlogSubcategories', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->BlogSubcategories);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\BlogSubcategoriesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
