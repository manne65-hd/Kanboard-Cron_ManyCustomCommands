<?php

namespace Kanboard\Plugin\Cron_ManyCustomCommands\Console;

use Kanboard\Console\BaseCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;


/**
 * Class MyFirstCustomCommand
 *
 */
class MyFirstCustomCommand extends BaseCommand
{
    protected function configure()
    {
        $this
            ->setName('manycommands:my-first-custom-command')
            ->setDescription('Create a new task.(Project-ID 1 / Creator-ID 1)')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $newTaskId = $this->createTask();
        if ($newTaskId > 0) {
            $output->writeln('Created a new task with ID: ' . $newTaskId);
        } else {
            $output->writeln('Failed creating a new task.');
        }
    }

    private function createTask()
    {
        $taskId = $this->taskCreationModel->create(array(
            'project_id'  => 1,
            'title'       => 'A new task via the Cron_ManyCustomCommands-Plugin',
            'description' => 'This task has been created with the Cron_ManyCustomCommands-Plugin ...',
            'creator_id'  => 1,
        ));

        return $taskId;
    }
}
