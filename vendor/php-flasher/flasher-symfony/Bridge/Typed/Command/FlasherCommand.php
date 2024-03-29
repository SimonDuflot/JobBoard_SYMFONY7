<?php

/*
 * This file is part of the PHPFlasher package.
 * (c) Younes KHOUBZA <younes.khoubza@gmail.com>
 */

namespace Flasher\Symfony\Bridge\Typed\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

abstract class FlasherCommand extends Command
{
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        return $this->flasherExecute($input, $output);
    }

    /**
     * @return int
     */
    abstract protected function flasherExecute(InputInterface $input, OutputInterface $output);
}
