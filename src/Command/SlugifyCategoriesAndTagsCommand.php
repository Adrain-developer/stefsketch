<?php
declare(strict_types=1);

namespace App\Command;

use Cake\Command\Command;
use Cake\Console\Arguments;
use Cake\Console\ConsoleIo;
use Cake\Console\ConsoleOptionParser;
use Cake\Utility\Text;

/**
 * SlugifyCategoriesAndTags command.
 */
class SlugifyCategoriesAndTagsCommand extends Command
{
    /**
     * Hook method for defining this command's option parser.
     *
     * @see https://book.cakephp.org/4/en/console-commands/commands.html#defining-arguments-and-options
     * @param \Cake\Console\ConsoleOptionParser $parser The parser to be defined
     * @return \Cake\Console\ConsoleOptionParser The built parser.
     */
    public function buildOptionParser(ConsoleOptionParser $parser): ConsoleOptionParser
    {
        $parser = parent::buildOptionParser($parser);

        return $parser;
    }

    /**
     * Implement this method with your command's logic.
     *
     * @param \Cake\Console\Arguments $args The command arguments.
     * @param \Cake\Console\ConsoleIo $io The console io
     * @return null|void|int The exit code or null for success
     */
    public function execute(Arguments $args, ConsoleIo $io)
    {
        $this->loadModel('BlogCategories');
        $this->loadModel('BlogTags');

        $io->out("Actualizando slugs de BlogCategories...");
        $categories = $this->BlogCategories->find();
        foreach ($categories as $category) {
            $category->slug = Text::slug(strtolower($category->name));
            $this->BlogCategories->save($category);
        }

        $io->out("Actualizando slugs de BlogTags...");
        $tags = $this->BlogTags->find();
        foreach ($tags as $tag) {
            $tag->slug = Text::slug(strtolower($tag->name));
            $this->BlogTags->save($tag);
        }

        $io->success("Slugs actualizados correctamente.");
    }
}
