<?php
/**
 * ZF2rapid - Zend Framework 2 Rapid Development Tool
 *
 * @link      https://github.com/ZFrapid/zf2rapid
 * @copyright Copyright (c) 2014 - 2015 Ralf Eggert
 * @license   http://opensource.org/licenses/MIT The MIT License (MIT)
 */
namespace ZF2rapid\Command\Create;

use Zend\Console\ColorInterface as Color;
use ZF2rapid\Command\AbstractCommand;

/**
 * Class CreateControllerFactory
 *
 * @package ZF2rapid\Command\Create
 */
class CreateControllerFactory extends AbstractCommand
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
            'ZF2rapid\Task\Check\ModuleExists',
            'ZF2rapid\Task\Check\ControllerExists',
            'ZF2rapid\Task\GenerateFactory\GenerateControllerFactory',
            'ZF2rapid\Task\UpdateConfig\UpdateControllerConfig',
        );

    /**
     * Start the command
     */
    public function startCommand()
    {
        // start output
        $this->console->writeGoLine('command_create_controller_factory_start');
    }

    /**
     * Stop the command
     */
    public function stopCommand()
    {
        $this->console->writeOkLine(
            'command_create_controller_factory_stop',
            array(
                $this->console->colorize(
                    $this->params->paramController, Color::GREEN
                ),
                $this->console->colorize(
                    $this->params->paramModule, Color::GREEN
                )
            )
        );
    }
}
