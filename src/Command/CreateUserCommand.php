<?php
declare (strict_types = 1);

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: 'app:create-user', description: 'create User Command', hidden:false)]

class CreateUserCommand extends Command
{
    private bool $requirePassword;

    public function __construct(bool $requirePassword = false)
    {
        $this->requirePassword = $requirePassword;
        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->setDescription ('Creates a new user.')
            ->setHelp ('This command allows to create a user...')
            ->addArgument('username');
    }



    protected function execute(InputInterface $input, OutputInterface $output) : int
    {
        $username = $input->getArgument('username');

        $output -> writeln([
            'User Creator',
            '============',
            ''
        ]);

        $output ->writeln('Username:'.$username);

        return Command::SUCCESS;
    }
}