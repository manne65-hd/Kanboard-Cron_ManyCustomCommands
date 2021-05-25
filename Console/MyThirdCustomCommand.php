<?php

namespace Kanboard\Plugin\Cron_ManyCustomCommands\Console;

use Kanboard\Console\BaseCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;


/**
 * Class MyThirdCustomCommand
 *
 */
class MyThirdCustomCommand extends BaseCommand
{
    protected function configure()
    {
        $this
            ->setName('manycommands:my-third-custom-command')
            ->setDescription('Add a comment to task-ID 1')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $comment_added = $this->addComment();
        if ($comment_added) {
            $output->writeln('Added a comment to task-ID 1.');
        } else {
            $output->writeln('Failed adding a comment to task-ID 1.');
        }
    }

    private function addComment()
    {
        $success = $this->commentModel->create(array(
            'comment'  => 'A comment added via the Cron_ManyCustomCommands-Plugin.',
            'task_id'  => 1,
            'user_id'  => 1,
        ));

        return $success;
    }
}
