<?php

namespace TwigBridge\Console;

use Illuminate\Console\Command;
use TwigBridge\TwigBridge;
use Twig_Environment;

class TwigBridgeCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'twig';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get information about TwigBridge';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function fire()
    {
        $this->line('<info>Twig</info> version <comment>'.Twig_Environment::VERSION.'</comment>');
        $this->line('<info>Twig Bridge</info> version <comment>'.TwigBridge::VERSION.'</comment>');
    }
}