<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class AddSlugToBlogCategoriesAndBlogTags extends AbstractMigration
{
    public function change()
    {
        $this->table('blog_categories')
            ->addColumn('slug', 'string', [
                'limit' => 191,
                'null' => true,
                'default' => null,
                'after' => 'name' // coloca el slug después del nombre
            ])
            ->addIndex(['slug'], ['unique' => true])
            ->update();

        $this->table('blog_tags')
            ->addColumn('slug', 'string', [
                'limit' => 191,
                'null' => true,
                'default' => null,
                'after' => 'name'
            ])
            ->addIndex(['slug'], ['unique' => true])
            ->update();
    }
}
