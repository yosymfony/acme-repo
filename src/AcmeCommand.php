<?php

namespace Acme;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class AcmeCommand extends Command
{
    protected static $defaultName = 'acme';

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Welcome to ACME Corp.');
        
        return 0;
    }
}
