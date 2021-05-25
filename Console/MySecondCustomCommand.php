<?php

namespace Kanboard\Plugin\Cron_ManyCustomCommands\Console;

use Kanboard\Console\BaseCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;


/**
 * Class MySecondCustomCommand
 *
 */
class MySecondCustomCommand extends BaseCommand
{
    protected function configure()
    {
        $this
            ->setName('manycommands:my-second-custom-command')
            ->setDescription('Update priority(set to 3) for task-ID 1')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $priority_updated = $this->updatePriority();
        if ($priority_updated) {
            $output->writeln('Updated priority(set to 3) for task-ID 1.');
        } else {
            $output->writeln('Failed updating priority for task-ID 1.');
        }
    }

    private function updatePriority()
    {
        $success = $this->taskModificationModel->update(array(
            'id'       => 1,
            'priority' => 3,
        ));

        return $success;
    }
}
