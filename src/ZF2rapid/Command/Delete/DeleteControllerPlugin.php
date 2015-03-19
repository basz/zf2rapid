<?php
/**
 * ZF2rapid - Zend Framework 2 Rapid Development Tool
 *
 * @link      https://github.com/ZFrapid/zf2rapid
 * @copyright Copyright (c) 2014 - 2015 Ralf Eggert
 * @license   http://opensource.org/licenses/MIT The MIT License (MIT)
 */
namespace ZF2rapid\Command\Delete;

use Zend\Console\ColorInterface as Color;
use ZF2rapid\Command\AbstractCommand;

/**
 * Class DeleteControllerPlugin
 *
 * @package ZF2rapid\Command\Delete
 */
class DeleteControllerPlugin extends AbstractCommand
{
    /**
     * @var array
     */
    protected $tasks
        = array(
            'ZF2rapid\Task\Setup\ProjectPath',
            'ZF2rapid\Task\Setup\ConfigFile',
            'ZF2rapid\Task\Setup\Params',
            'ZF2rapid\Task\Check\ModulePathExists',
            'ZF2rapid\Task\Check\ControllerPluginExists',
            'ZF2rapid\Task\ControllerPlugin\DeleteControllerPlugin',
            'ZF2rapid\Task\ControllerPlugin\DeleteControllerPluginFactory',
            'ZF2rapid\Task\ControllerPlugin\RemoveControllerPluginConfig',
        );

    /**
     * Start the command
     */
    public function startCommand()
    {
        // start output
        $this->console->writeGoLine('Deleting controller plugin...');
    }

    /**
     * Stop the command
     */
    public function stopCommand()
    {
        $this->console->writeOkLine(
            'Congratulations! The controller plugin '
            . $this->console->colorize(
                $this->params->paramControllerPlugin, Color::GREEN
            ) . ' for module ' . $this->console->colorize(
                $this->params->paramModule, Color::GREEN
            ) . ' was successfully deleted.'
        );
    }
}
