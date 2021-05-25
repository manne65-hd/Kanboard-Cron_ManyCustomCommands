<?php

namespace Kanboard\Plugin\Cron_ManyCustomCommands;

use Kanboard\Core\Plugin\Base;
use Kanboard\Plugin\Cron_ManyCustomCommands\Console\MyFirstCustomCommand;
use Kanboard\Plugin\Cron_ManyCustomCommands\Console\MySecondCustomCommand;
use Kanboard\Plugin\Cron_ManyCustomCommands\Console\MyThirdCustomCommand;

class Plugin extends Base
{
    public function initialize()
    {
        // create 3 custom CLI-commands
        $this->cli->add(new MyFirstCustomCommand($this->container));
        $this->cli->add(new MySecondCustomCommand($this->container));
        $this->cli->add(new MyThirdCustomCommand($this->container));
    }

    public function getClasses()
    {
        return [
            'Plugin\Cron_ManyCustomCommands\Console' => [
                'MyFirstCustomCommand',
                'MySecondCustomCommand',
                'MyThirdCustomCommand',
                ],
        ];
    }

    public function getPluginName()
    {
        return 'Cron_ManyCustomCommands';
    }

    public function getPluginDescription()
    {
        return t('Add many new custom commands to Kanboard\'s CLI-interface');
    }

    public function getPluginAuthor()
    {
        return 'Manfred Hoffmann';
    }

    public function getPluginVersion()
    {
        return '0.9.0';
    }

    public function getCompatibleVersion()
    {
        return '>=1.0.35';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/manne65-hd/Kanboard-Cron_ManyCustomCommands';
    }
}
?>
