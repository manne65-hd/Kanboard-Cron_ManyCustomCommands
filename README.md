Cron_ManyCustomCommands
========================

Skeleton for a plugin that adds many _(basically more than ONE)_ new custom commands to the CLI-interface

### Purpose of this plugin
This is not meant to be a _(really)_ productive plugin, but rather the starting point if you want to develop a plugin that is supposed to add many "categorized" new custom commands to the CLI-interface of Kanboard.

I made this, while trying to figure out how to make a plugin that can act as a CRON-command and thought I'd share it here, so that others can also use and _(if necessary)_ improve this skeleton.

If you plan to make a plugin that is supposed to add only ONE custom command to the CLI-interface ... [take a look at another version of this skeleton.](https://github.com/manne65-hd/Kanboard-Cron_SingleCustomCommand)

If you are only interested in adding a new custom "batch"-command to the CLI, [take a look at this skeleton.](https://github.com/manne65-hd/Kanboard-Cron_TriggerMultipleCommands)


### Does is actually DO something?
Yes ... this is in fact a fully functioning plugin in order to demonstrate the basic concept.

It adds 3 "categorized" _(see screenshots below)_ new custom commands to the CLI:
 -  ```php cli manycommands:my-first-custom-command```
   - ...  will create a new task in a project with ID 1 and use user-ID 1 as the creator of the new task.
 -  ```php cli manycommands:my-second-custom-command```
   - ...  will set the priority of task-ID 1 to 3.
 -  ```php cli manycommands:my-third-custom-command```
   - ...  will add a comment to task-ID 1.

### Screenshots
![01-CLI-List-ManyCommands](https://user-images.githubusercontent.com/48651533/119476327-3f2dd880-bd4e-11eb-8aa4-ca6210f72b66.png)

![02-CLI-Execute-ManyCommands](https://user-images.githubusercontent.com/48651533/119476410-510f7b80-bd4e-11eb-905d-84e9675788ef.png)

Author
------

- Manfred Hoffmann
- License MIT

Requirements
------------

- Kanboard >= 1.0.35

Installation
------------

You have the choice between 2 methods:

1. Download the zip file and decompress everything under the directory `plugins/Cron_ManyCustomCommands`
2. Clone this repository into the folder `plugins/Cron_ManyCustomCommands`

Note: Plugin folder is case-sensitive.
